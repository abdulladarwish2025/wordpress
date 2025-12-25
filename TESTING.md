# Testing & Verification Guide

This document helps you verify that the Smart Accountant WordPress theme deployment is working correctly.

## ✅ Pre-Deployment Checklist

Before deploying, verify these files exist:

```bash
# Required files
✓ docker-compose.yml
✓ .env.example
✓ setup.sh
✓ deploy.sh
✓ wp-content/themes/smart-accountant-theme/style.css
✓ wp-content/themes/smart-accountant-theme/functions.php
✓ wp-content/themes/smart-accountant-theme/index.php
✓ wp-content/themes/smart-accountant-theme/header.php
✓ wp-content/themes/smart-accountant-theme/footer.php
✓ wp-content/themes/smart-accountant-theme/sidebar.php
```

## 🐳 Docker Deployment Test

### 1. Validate Configuration

```bash
# Validate docker-compose.yml syntax
docker compose config

# Expected: No errors, configuration should display
```

### 2. Start Services

```bash
# Create .env file
cp .env.example .env

# Start containers
docker compose up -d

# Expected output:
# ✔ Container smart-accountant-db Created
# ✔ Container smart-accountant-wordpress Created
# ✔ Container smart-accountant-phpmyadmin Created
```

### 3. Check Container Status

```bash
# Check if containers are running
docker compose ps

# Expected: All 3 containers should be "running"
```

### 4. Check Logs

```bash
# Check WordPress logs
docker compose logs wordpress

# Check database logs
docker compose logs db

# No errors should appear
```

### 5. Access Services

Test these URLs in your browser:

- **WordPress**: http://localhost:8080
  - ✅ Should show WordPress installation wizard
  - ✅ Page should load without errors
  
- **phpMyAdmin**: http://localhost:8081
  - ✅ Should show phpMyAdmin login
  - ✅ Login with: root / root_password

### 6. Complete WordPress Installation

1. Open http://localhost:8080
2. Select language (Arabic for RTL support)
3. Click "Continue"
4. Fill in site information:
   - Site Title: `المحاسب الذكي`
   - Username: `admin` (or your choice)
   - Password: (strong password)
   - Email: your-email@example.com
5. Click "Install WordPress"
6. ✅ Should see "Success!" message

### 7. Verify Theme Installation

After WordPress installation:

```bash
# Check if theme files are accessible in container
docker compose exec wordpress ls -la /var/www/html/wp-content/themes/

# Expected: Should see smart-accountant-theme folder
```

### 8. Activate Theme

1. Login to WordPress admin: http://localhost:8080/wp-admin
2. Go to **Appearance → Themes**
3. Verify "Smart Accountant Theme" appears
4. Click **Activate**
5. ✅ Theme should activate without errors

### 9. Visual Verification

Visit: http://localhost:8080

Check these elements:

- [ ] Header displays "المحاسب الذكي" with calculator icon
- [ ] Navigation menu area visible (even if empty)
- [ ] RTL layout (Arabic right-to-left)
- [ ] Blue primary color (#1855e2)
- [ ] Responsive design (test on mobile)
- [ ] Footer displays correctly
- [ ] Hero section with search bar
- [ ] Category filters visible
- [ ] Featured article section

### 10. Verify Assets Loading

Open browser DevTools (F12) and check:

- [ ] No 404 errors in Console
- [ ] Tailwind CSS loaded from CDN
- [ ] Google Fonts loaded (Noto Sans Arabic, Manrope)
- [ ] Material Symbols icons loaded
- [ ] Page styling applied correctly

### 11. Test Functionality

- [ ] Create a test post
- [ ] Add featured image to post
- [ ] Assign category to post
- [ ] Visit homepage - post should appear
- [ ] Click post - should open post page
- [ ] Test navigation menu (if configured)
- [ ] Test search functionality
- [ ] Test responsive menu (mobile view)

### 12. Performance Check

```bash
# Check container resource usage
docker stats --no-stream

# WordPress container should use reasonable resources
# Typically: < 200MB RAM, < 5% CPU when idle
```

## 🌐 Production Deployment Tests

### VPS/Server Deployment

After deploying to a VPS:

1. **Check Service Status**
   ```bash
   docker compose ps
   systemctl status nginx  # if using nginx
   ```

2. **Test Domain Access**
   - Visit your domain
   - Verify HTTPS works (if SSL configured)
   - Check for mixed content warnings

3. **Security Headers**
   ```bash
   curl -I https://your-domain.com
   
   # Check for these headers:
   # - X-Content-Type-Options
   # - X-Frame-Options
   # - Strict-Transport-Security (if HTTPS)
   ```

4. **Performance Test**
   ```bash
   # Test page load time
   curl -o /dev/null -s -w '%{time_total}\n' http://your-domain.com
   
   # Should be < 3 seconds for initial load
   ```

### Free Hosting Deployment

For InfinityFree, 000webhost, etc:

1. **FTP Upload Verification**
   - Check theme files uploaded correctly
   - Verify folder structure intact
   - Check file permissions (755/644)

2. **WordPress Admin Access**
   - Login to wp-admin
   - Navigate to Appearance → Themes
   - Verify theme appears and can be activated

3. **Theme Activation**
   - Activate Smart Accountant Theme
   - Visit site homepage
   - Verify styling loads correctly

4. **CDN Resource Loading**
   - Check browser console for errors
   - Verify Tailwind CSS loads
   - Verify Google Fonts load
   - Some free hosts block external resources - if styling broken, this might be the issue

## 🐛 Troubleshooting Tests

### Theme Not Showing

```bash
# Check theme folder exists
ls -la wp-content/themes/smart-accountant-theme/

# Check style.css exists and has proper headers
cat wp-content/themes/smart-accountant-theme/style.css

# Should contain:
# Theme Name: Smart Accountant Theme
```

### Styling Issues

1. **Check browser console** (F12 → Console)
   - Look for blocked resources
   - Check for JavaScript errors

2. **Verify CDN access**
   ```bash
   curl -I https://cdn.tailwindcss.com
   curl -I https://fonts.googleapis.com
   
   # Should return 200 OK
   ```

3. **Clear cache**
   - Clear browser cache
   - Clear WordPress cache (if plugin installed)
   - Hard refresh: Ctrl+Shift+R (Windows) or Cmd+Shift+R (Mac)

### Database Connection Issues

```bash
# Test database connection
docker compose exec db mysql -u wordpress -p

# Enter password: wordpress_password
# Should connect successfully
```

### Container Issues

```bash
# Check container logs
docker compose logs --tail=50

# Restart containers
docker compose restart

# Rebuild if needed
docker compose down
docker compose up -d --build
```

## 📊 Success Criteria

Your deployment is successful if:

- ✅ WordPress installation completes without errors
- ✅ Theme appears in Appearance → Themes
- ✅ Theme activates without errors
- ✅ Homepage displays with correct styling
- ✅ RTL (Arabic) layout works correctly
- ✅ Primary blue color (#1855e2) applied
- ✅ Navigation, header, footer render correctly
- ✅ Material icons display
- ✅ Responsive design works on mobile
- ✅ Posts display with featured images
- ✅ No JavaScript errors in console
- ✅ No 404 errors for assets
- ✅ Page loads in < 3 seconds

## 🎯 Post-Deployment Recommendations

After successful deployment:

1. **Configure WordPress**
   - Set permalinks to "Post name"
   - Configure site title and tagline
   - Set timezone

2. **Create Navigation Menu**
   - Appearance → Menus
   - Create menu items
   - Assign to "Primary Menu"

3. **Add Content**
   - Create sample posts
   - Add featured images
   - Assign categories

4. **Install Essential Plugins** (optional)
   - Yoast SEO (SEO optimization)
   - WP Super Cache (performance)
   - Wordfence (security)
   - UpdraftPlus (backups)

5. **Security Hardening**
   - Change admin username from "admin"
   - Use strong passwords
   - Enable two-factor authentication
   - Regular backups
   - Keep WordPress and theme updated

6. **Performance Optimization**
   - Enable caching
   - Optimize images
   - Use CDN (Cloudflare)
   - Enable Gzip compression

7. **Monitor**
   - Set up uptime monitoring
   - Check error logs regularly
   - Monitor site speed

## 📝 Test Results Template

Use this template to document your test results:

```
=== Smart Accountant Theme Deployment Test Results ===

Date: _______________
Environment: [ ] Docker Local  [ ] VPS  [ ] Free Hosting
Tester: _______________

Docker Tests:
[ ] Configuration validated
[ ] Containers started
[ ] WordPress accessible
[ ] phpMyAdmin accessible
[ ] Theme visible in admin
[ ] Theme activated successfully

Visual Tests:
[ ] Header displays correctly
[ ] RTL layout working
[ ] Primary color applied
[ ] Icons displaying
[ ] Footer displays correctly
[ ] Responsive on mobile

Functionality Tests:
[ ] Posts display
[ ] Navigation works
[ ] Search works
[ ] Categories work
[ ] Pagination works

Performance:
Page Load Time: _____ seconds
Container RAM Usage: _____ MB
Browser Console Errors: [ ] None  [ ] Some (list below)

Issues Found:
1. _______________
2. _______________
3. _______________

Resolution:
_______________

Overall Result: [ ] PASS  [ ] FAIL  [ ] NEEDS WORK

Signature: _______________
```

---

**Note**: Keep this document handy for reference during deployment and troubleshooting!
