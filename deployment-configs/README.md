# Deployment Configuration Files

This directory contains configuration files for various deployment scenarios.

## Files

### nginx.conf
Nginx reverse proxy configuration for deploying with Docker.

**Usage:**
```bash
sudo cp nginx.conf /etc/nginx/sites-available/wordpress
sudo ln -s /etc/nginx/sites-available/wordpress /etc/nginx/sites-enabled/
sudo nginx -t
sudo systemctl restart nginx
```

**Don't forget to:**
1. Replace `your-domain.com` with your actual domain
2. Run certbot for SSL: `sudo certbot --nginx -d your-domain.com`

### .htaccess
Apache configuration for traditional WordPress hosting.

**Usage:**
- Copy to your WordPress root directory
- Ensure mod_rewrite is enabled
- Adjust PHP values based on your hosting limits

### wp-config-sample.php
Sample WordPress configuration file with security enhancements.

**Usage:**
```bash
cp wp-config-sample.php /path/to/wordpress/wp-config.php
# Edit wp-config.php with your database credentials
```

## Quick Reference

### For Docker Deployment
Use `docker-compose.yml` in the root directory.

### For Traditional Hosting
1. Upload WordPress files
2. Copy `.htaccess` to WordPress root
3. Configure `wp-config.php` with database details
4. Upload theme to `wp-content/themes/`

### For VPS with nginx
1. Install Docker and Docker Compose
2. Run `docker-compose up -d`
3. Copy and configure `nginx.conf`
4. Set up SSL with certbot

See [../DEPLOYMENT.md](../DEPLOYMENT.md) for detailed instructions.
