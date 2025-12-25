#!/bin/bash

# Quick Deploy Script for Smart Accountant WordPress Theme
# Supports multiple deployment methods

set -e

echo "=================================================="
echo "  Smart Accountant Theme - Quick Deploy"
echo "=================================================="
echo ""
echo "Choose your deployment method:"
echo ""
echo "  1) Docker (Local or VPS with Docker)"
echo "  2) Create deployment package (for FTP upload)"
echo "  3) Install on existing WordPress (copy theme only)"
echo "  4) Exit"
echo ""
read -p "Enter your choice (1-4): " choice

case $choice in
    1)
        echo ""
        echo "🐳 Docker Deployment"
        echo "===================="
        echo ""
        ./setup.sh
        ;;
    
    2)
        echo ""
        echo "📦 Creating deployment package..."
        echo ""
        
        # Create a zip file with just the theme
        PACKAGE_NAME="smart-accountant-theme-$(date +%Y%m%d-%H%M%S).zip"
        
        if command -v zip &> /dev/null; then
            cd wp-content/themes
            zip -r "../../../$PACKAGE_NAME" smart-accountant-theme/
            cd ../../..
            echo ""
            echo "✅ Package created: $PACKAGE_NAME"
            echo ""
            echo "Upload instructions:"
            echo "  1. Upload this zip file to your WordPress installation"
            echo "  2. Go to wp-admin → Appearance → Themes → Add New → Upload Theme"
            echo "  3. Choose the zip file and click 'Install Now'"
            echo "  4. Activate the theme"
            echo ""
            echo "For FTP upload:"
            echo "  1. Extract the zip file"
            echo "  2. Upload the 'smart-accountant-theme' folder to:"
            echo "     /wp-content/themes/"
            echo "  3. Activate from WordPress admin"
        else
            echo "❌ 'zip' command not found"
            echo "Please install zip utility or manually copy the theme folder:"
            echo "  wp-content/themes/smart-accountant-theme"
        fi
        ;;
    
    3)
        echo ""
        echo "📋 Theme Installation Instructions"
        echo "===================================="
        echo ""
        echo "To install the Smart Accountant theme on existing WordPress:"
        echo ""
        echo "Method 1: Direct copy (if you have server access)"
        echo "  cp -r wp-content/themes/smart-accountant-theme /path/to/wordpress/wp-content/themes/"
        echo ""
        echo "Method 2: FTP Upload"
        echo "  1. Connect to your server via FTP"
        echo "  2. Navigate to wp-content/themes/"
        echo "  3. Upload the 'smart-accountant-theme' folder from:"
        echo "     $(pwd)/wp-content/themes/smart-accountant-theme"
        echo ""
        echo "Method 3: WordPress Admin"
        echo "  1. Create a zip of the theme folder:"
        echo "     cd wp-content/themes && zip -r smart-accountant-theme.zip smart-accountant-theme/"
        echo "  2. Login to WordPress admin"
        echo "  3. Go to Appearance → Themes → Add New → Upload Theme"
        echo "  4. Upload the zip file and activate"
        echo ""
        read -p "Press Enter to continue..."
        ;;
    
    4)
        echo "Exiting..."
        exit 0
        ;;
    
    *)
        echo "Invalid choice. Please run the script again."
        exit 1
        ;;
esac

echo ""
echo "=================================================="
echo "For detailed deployment instructions, see:"
echo "  📖 DEPLOYMENT.md"
echo "=================================================="
