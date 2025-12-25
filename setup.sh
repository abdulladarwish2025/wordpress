#!/bin/bash

# Smart Accountant WordPress Theme - Quick Setup Script
# This script helps you quickly set up the WordPress environment

set -e

# Trap Ctrl+C and handle it gracefully
trap 'echo -e "\n\nSetup cancelled by user."; exit 0' SIGINT SIGTERM

echo "=================================================="
echo "  Smart Accountant WordPress Theme Setup"
echo "=================================================="
echo ""

# Check if Docker is installed
if ! command -v docker &> /dev/null; then
    echo "❌ Docker is not installed!"
    echo "Please install Docker first: https://docs.docker.com/get-docker/"
    exit 1
fi

# Check if Docker Compose is available
if ! command -v docker-compose &> /dev/null && ! docker compose version &> /dev/null; then
    echo "❌ Docker Compose is not installed!"
    echo "Please install Docker Compose: https://docs.docker.com/compose/install/"
    exit 1
fi

echo "✅ Docker is installed"
echo ""

# Create .env file if it doesn't exist
if [ ! -f .env ]; then
    echo "📝 Creating .env file from template..."
    cp .env.example .env
    echo "✅ .env file created"
    echo ""
    echo "You can edit .env file to customize your configuration."
    echo "Current default settings will be used."
else
    echo "✅ .env file already exists"
fi
echo ""

# Ask if user wants to start the containers
read -p "Do you want to start the WordPress containers now? (y/n) " -n 1 -r
echo ""

if [[ $REPLY =~ ^[Yy]$ ]]; then
    echo ""
    echo "🚀 Starting Docker containers..."
    echo ""
    
    # Use docker-compose or docker compose based on what's available
    if command -v docker-compose &> /dev/null; then
        docker-compose up -d
    else
        docker compose up -d
    fi
    
    echo ""
    echo "=================================================="
    echo "  ✅ Setup Complete!"
    echo "=================================================="
    echo ""
    echo "WordPress is now running at:"
    echo "  🌐 WordPress: http://localhost:8080"
    echo "  🗄️  phpMyAdmin: http://localhost:8081"
    echo ""
    echo "Next steps:"
    echo "  1. Open http://localhost:8080 in your browser"
    echo "  2. Complete the WordPress installation"
    echo "  3. Login to wp-admin"
    echo "  4. Go to Appearance → Themes"
    echo "  5. Activate 'Smart Accountant Theme'"
    echo ""
    echo "To stop the containers, run:"
    echo "  docker-compose down"
    echo ""
    echo "For deployment instructions, see DEPLOYMENT.md"
    echo "=================================================="
else
    echo ""
    echo "Setup files are ready!"
    echo "To start the containers later, run:"
    echo "  docker-compose up -d"
    echo ""
    echo "For deployment instructions, see DEPLOYMENT.md"
fi
