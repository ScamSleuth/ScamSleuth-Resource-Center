#!/usr/bin/env python3
"""
Statistics Viewer for Anti-Scam Bot

This script displays detailed statistics from the stats.json file generated
by the anti-scam bot, showing performance metrics, submission counts,
error rates, and more.
"""

import os
import json
import argparse
from datetime import datetime

# Stats file location
STATS_FILE = "stats.json"  # Should match the location in the main script

def format_number(num):
    """Format a number with thousands separators"""
    return f"{num:,}"

def format_time(seconds):
    """Format time in seconds to a readable format"""
    if seconds is None:
        return "N/A"
    
    if seconds < 1:
        return f"{seconds*1000:.1f} ms"
    elif seconds < 60:
        return f"{seconds:.2f} seconds"
    else:
        minutes = int(seconds // 60)
        secs = seconds % 60
        return f"{minutes} min {secs:.1f} sec"

def calculate_uptime(start_time_str):
    """Calculate uptime from start time string"""
    if not start_time_str:
        return "Unknown"
    
    try:
        start_time = datetime.strptime(start_time_str, "%Y-%m-%d %H:%M:%S")
        now = datetime.now()
        delta = now - start_time
        
        # Format the delta
        days = delta.days
        hours, remainder = divmod(delta.seconds, 3600)
        minutes, seconds = divmod(remainder, 60)
        
        if days > 0:
            return f"{days} days, {hours} hours, {minutes} minutes"
        elif hours > 0:
            return f"{hours} hours, {minutes} minutes"
        else:
            return f"{minutes} minutes, {seconds} seconds"
    except Exception:
        return "Error calculating uptime"

def display_stats(verbose=False, visual=False):
    """Display the statistics from the stats file"""
    if not os.path.exists(STATS_FILE):
        print(f"Error: Stats file '{STATS_FILE}' not found!")
        print("The bot may not have created it yet or you're running this script from a different directory.")
        return
    
    try:
        with open(STATS_FILE, 'r') as f:
            stats = json.load(f)
        
        # Get the modification time of the file
        mod_time = os.path.getmtime(STATS_FILE)
        mod_time_str = datetime.fromtimestamp(mod_time).strftime('%Y-%m-%d %H:%M:%S')
        
        # Display header
        print("\n" + "=" * 60)
        print("            ANTI-SCAM BOT STATISTICS DASHBOARD")
        print("=" * 60)
        
        # Display general info
        total = stats.get("total_submissions", 0)
        start_time = stats.get("start_time", "Unknown")
        last_submission = stats.get("last_submission_time", "Never")
        
        print(f"\n📊 GENERAL STATISTICS")
        print(f"  Total fake entries submitted: {format_number(total)}")
        print(f"  Bot started: {start_time}")
        print(f"  Running for: {calculate_uptime(start_time)}")
        print(f"  Last submission: {last_submission}")
        print(f"  Stats last updated: {mod_time_str}")
        
        # Display session info
        sessions = stats.get("sessions", {})
        session_count = sessions.get("count", 0)
        current_session_start = sessions.get("current_session_start", "Unknown")
        current_session_submissions = sessions.get("current_session_submissions", 0)
        
        print(f"\n🔄 SESSION INFORMATION")
        print(f"  Total sessions: {format_number(session_count)}")
        print(f"  Current session started: {current_session_start}")
        print(f"  Current session submissions: {format_number(current_session_submissions)}")
        
        if current_session_submissions > 0:
            # Calculate session rate
            try:
                start = datetime.strptime(current_session_start, "%Y-%m-%d %H:%M:%S")
                now = datetime.now()
                duration_minutes = (now - start).total_seconds() / 60
                if duration_minutes > 0:
                    rate = current_session_submissions / duration_minutes
                    print(f"  Current session rate: {rate:.2f} submissions per minute")
            except Exception:
                pass
        
        # Display performance metrics
        performance = stats.get("performance", {})
        fastest = performance.get("fastest_submission")
        slowest = performance.get("slowest_submission")
        average = performance.get("average_submission_time")
        
        print(f"\n⚡ PERFORMANCE METRICS")
        print(f"  Fastest submission: {format_time(fastest)}")
        print(f"  Slowest submission: {format_time(slowest)}")
        print(f"  Average submission time: {format_time(average)}")
        
        # Display token statistics
        tokens = stats.get("tokens", {})
        if tokens:
            print(f"\n🔑 TOKEN STATISTICS")
            
            # Sort tokens by submission count (highest first)
            sorted_tokens = sorted(tokens.items(), key=lambda x: x[1].get("submissions", 0), reverse=True)
            
            for token_key, token_data in sorted_tokens:
                submissions = token_data.get("submissions", 0)
                first_used = token_data.get("first_used", "Unknown")
                last_used = token_data.get("last_used", "Unknown")
                errors = token_data.get("errors", 0)
                
                # Calculate percentage of total
                percentage = (submissions / total) * 100 if total > 0 else 0
                
                print(f"  Token {token_key}...")
                print(f"    Submissions: {format_number(submissions)} ({percentage:.1f}%)")
                print(f"    First used: {first_used}")
                print(f"    Last used: {last_used}")
                if errors > 0:
                    print(f"    Errors: {format_number(errors)}")
                print()
        
        # Display error statistics
        errors = stats.get("errors", {})
        total_errors = errors.get("total", 0)
        by_type = errors.get("by_type", {})
        
        if total_errors > 0:
            print(f"\n❌ ERROR STATISTICS")
            print(f"  Total errors: {format_number(total_errors)}")
            
            # Calculate error rate
            if total > 0:
                error_rate = (total_errors / (total + total_errors)) * 100
                print(f"  Error rate: {error_rate:.2f}%")
            
            # Sort errors by count (highest first)
            sorted_errors = sorted(by_type.items(), key=lambda x: x[1], reverse=True)
            
            print(f"  Errors by type:")
            for error_type, count in sorted_errors:
                print(f"    {error_type}: {format_number(count)}")
        
        # Visual representation (simple ASCII chart of submissions by token)
        if visual and total > 0:
            print(f"\n📈 VISUAL REPRESENTATION")
            print(f"  Submissions by token:")
            
            max_width = 50  # Maximum width of chart
            
            for token_key, token_data in sorted_tokens:
                submissions = token_data.get("submissions", 0)
                percentage = (submissions / total) * 100
                bar_width = int((submissions / total) * max_width)
                
                bar = "█" * bar_width
                print(f"  {token_key}... |{bar} {percentage:.1f}%")
        
        # Display verbose information if requested
        if verbose:
            print("\n🔍 RAW STATISTICS DATA:")
            print(json.dumps(stats, indent=2))
        
        print("\n" + "=" * 60 + "\n")
        
    except Exception as e:
        print(f"Error reading stats file: {e}")

if __name__ == "__main__":
    parser = argparse.ArgumentParser(description="Display anti-scam bot statistics")
    parser.add_argument("-v", "--verbose", action="store_true", help="Show verbose output including raw stats data")
    parser.add_argument("-g", "--graph", action="store_true", help="Show visual representation of statistics")
    args = parser.parse_args()
    
    display_stats(args.verbose, args.graph)
