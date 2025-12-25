#!/bin/bash

# Smart Accountant Theme - Pre-Deployment Validation Script
# This script validates that all files are in place before deployment

set -e

echo "=================================================="
echo "  Smart Accountant Theme - Validation Script"
echo "=================================================="
echo ""

ERRORS=0
WARNINGS=0

# Color codes
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

# Function to check if file exists
check_file() {
    if [ -f "$1" ]; then
        echo -e "${GREEN}✓${NC} $1"
        return 0
    else
        echo -e "${RED}✗${NC} $1 (MISSING)"
        ERRORS=$((ERRORS + 1))
        return 1
    fi
}

# Function to check if directory exists
check_dir() {
    if [ -d "$1" ]; then
        echo -e "${GREEN}✓${NC} $1/"
        return 0
    else
        echo -e "${RED}✗${NC} $1/ (MISSING)"
        ERRORS=$((ERRORS + 1))
        return 1
    fi
}

# Function to check file content
check_content() {
    if grep -q "$2" "$1" 2>/dev/null; then
        echo -e "${GREEN}✓${NC} $1 contains '$2'"
        return 0
    else
        echo -e "${YELLOW}⚠${NC} $1 missing '$2'"
        WARNINGS=$((WARNINGS + 1))
        return 1
    fi
}

echo "Checking core deployment files..."
echo "-----------------------------------"
check_file "docker-compose.yml"
check_file ".env.example"
check_file "setup.sh"
check_file "deploy.sh"
check_file ".dockerignore"
check_file ".gitignore"
echo ""

echo "Checking documentation..."
echo "-------------------------"
check_file "README.md"
check_file "DEPLOYMENT.md"
check_file "QUICK-DEPLOY.md"
check_file "TESTING.md"
echo ""

echo "Checking theme structure..."
echo "---------------------------"
check_dir "wp-content"
check_dir "wp-content/themes"
check_dir "wp-content/themes/smart-accountant-theme"
echo ""

echo "Checking theme files..."
echo "-----------------------"
check_file "wp-content/themes/smart-accountant-theme/style.css"
check_file "wp-content/themes/smart-accountant-theme/functions.php"
check_file "wp-content/themes/smart-accountant-theme/index.php"
check_file "wp-content/themes/smart-accountant-theme/header.php"
check_file "wp-content/themes/smart-accountant-theme/footer.php"
check_file "wp-content/themes/smart-accountant-theme/sidebar.php"
echo ""

echo "Checking deployment configs..."
echo "------------------------------"
check_dir "deployment-configs"
check_file "deployment-configs/nginx.conf"
check_file "deployment-configs/.htaccess"
check_file "deployment-configs/wp-config-sample.php"
check_file "deployment-configs/README.md"
echo ""

echo "Validating theme metadata..."
echo "----------------------------"
check_content "wp-content/themes/smart-accountant-theme/style.css" "Theme Name: Smart Accountant Theme"
check_content "wp-content/themes/smart-accountant-theme/style.css" "Author:"
echo ""

echo "Checking script permissions..."
echo "------------------------------"
if [ -x "setup.sh" ]; then
    echo -e "${GREEN}✓${NC} setup.sh is executable"
else
    echo -e "${YELLOW}⚠${NC} setup.sh is not executable (run: chmod +x setup.sh)"
    WARNINGS=$((WARNINGS + 1))
fi

if [ -x "deploy.sh" ]; then
    echo -e "${GREEN}✓${NC} deploy.sh is executable"
else
    echo -e "${YELLOW}⚠${NC} deploy.sh is not executable (run: chmod +x deploy.sh)"
    WARNINGS=$((WARNINGS + 1))
fi
echo ""

echo "Validating Docker configuration..."
echo "----------------------------------"
if command -v docker &> /dev/null; then
    echo -e "${GREEN}✓${NC} Docker is installed"
    
    if docker compose version &> /dev/null || command -v docker-compose &> /dev/null; then
        echo -e "${GREEN}✓${NC} Docker Compose is available"
        
        # Check if docker-compose.yml exists
        if [ ! -f "docker-compose.yml" ]; then
            echo -e "${RED}✗${NC} docker-compose.yml file not found"
            ERRORS=$((ERRORS + 1))
        else
            # Validate docker-compose.yml syntax
            if docker compose config > /dev/null 2>&1; then
                echo -e "${GREEN}✓${NC} docker-compose.yml syntax is valid"
            else
                echo -e "${RED}✗${NC} docker-compose.yml has syntax errors"
                ERRORS=$((ERRORS + 1))
            fi
        fi
    else
        echo -e "${YELLOW}⚠${NC} Docker Compose not found (not required for all deployment methods)"
        WARNINGS=$((WARNINGS + 1))
    fi
else
    echo -e "${YELLOW}⚠${NC} Docker not installed (not required for all deployment methods)"
    WARNINGS=$((WARNINGS + 1))
fi
echo ""

echo "=================================================="
echo "Validation Summary"
echo "=================================================="
echo ""

if [ $ERRORS -eq 0 ] && [ $WARNINGS -eq 0 ]; then
    echo -e "${GREEN}✓ All checks passed!${NC}"
    echo ""
    echo "Your Smart Accountant theme is ready for deployment."
    echo ""
    echo "Next steps:"
    echo "  • Run ./setup.sh for Docker deployment"
    echo "  • Run ./deploy.sh for other deployment options"
    echo "  • See DEPLOYMENT.md for detailed instructions"
    echo ""
    exit 0
elif [ $ERRORS -eq 0 ]; then
    echo -e "${YELLOW}⚠ Validation completed with $WARNINGS warning(s)${NC}"
    echo ""
    echo "Warnings are not critical but should be reviewed."
    echo "You can proceed with deployment."
    echo ""
    exit 0
else
    echo -e "${RED}✗ Validation failed with $ERRORS error(s) and $WARNINGS warning(s)${NC}"
    echo ""
    echo "Please fix the errors before deploying."
    echo ""
    exit 1
fi
