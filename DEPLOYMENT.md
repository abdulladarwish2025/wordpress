# Deploying Smart Accountant WordPress Theme

This guide will help you deploy the Smart Accountant WordPress theme to a temporary domain using various methods.

## Table of Contents
- [Quick Start with Docker (Recommended)](#quick-start-with-docker-recommended)
- [Deploy to Free Hosting (InfinityFree, 000webhost)](#deploy-to-free-hosting)
- [Deploy to DigitalOcean or VPS](#deploy-to-digitalocean-or-vps)
- [Environment Variables](#environment-variables)
- [Theme Activation](#theme-activation)

---

## Quick Start with Docker (Recommended)

Docker provides the easiest way to get WordPress running locally or on a server with Docker support.

### Prerequisites
- Docker installed ([Get Docker](https://docs.docker.com/get-docker/))
- Docker Compose installed (usually comes with Docker Desktop)

### Steps

1. **Clone the repository**
   ```bash
   git clone https://github.com/abdulladarwish2025/wordpress.git
   cd wordpress
   ```

2. **Create environment file**
   ```bash
   cp .env.example .env
   ```
   
   Edit `.env` file with your preferred settings (optional - defaults work fine for testing).

3. **Start the containers**
   ```bash
   docker-compose up -d
   ```

4. **Access WordPress**
   - WordPress Site: http://localhost:8080
   - phpMyAdmin: http://localhost:8081

5. **Complete WordPress Installation**
   - Open http://localhost:8080 in your browser
   - Follow the WordPress installation wizard
   - Choose language and create admin account
   - Set site title and description

6. **Activate the Smart Accountant Theme**
   - Log in to WordPress admin (http://localhost:8080/wp-admin)
   - Go to Appearance → Themes
   - Find "Smart Accountant Theme" and click "Activate"

### Deploy Docker to Public Domain

To make your Docker instance accessible via a temporary domain:

#### Option A: Using ngrok (Quick temporary access)
```bash
# Install ngrok (https://ngrok.com/)
ngrok http 8080
```
This will give you a temporary public URL like: `https://random-string.ngrok.io`

#### Option B: Deploy to a VPS with Docker
1. Get a free or paid VPS (DigitalOcean, Linode, AWS EC2, etc.)
2. Install Docker on the VPS
3. Clone this repository on the VPS
4. Update `.env` with your domain name
5. Run `docker-compose up -d`
6. Configure your domain's DNS to point to the VPS IP

---

## Deploy to Free Hosting

Several platforms offer free WordPress hosting for testing/temporary domains.

### InfinityFree (Recommended Free Option)

1. **Sign up at [InfinityFree](https://infinityfree.net/)**

2. **Create a new account** with a subdomain (e.g., `smart-accountant.epizy.com`)

3. **Upload theme files via FTP:**
   - Host: `ftpupload.net` (use your specific FTP details from InfinityFree)
   - Upload the `wp-content/themes/smart-accountant-theme` folder to:
     `/htdocs/wp-content/themes/`

4. **Install WordPress:**
   - Use Softaculous installer in cPanel (if available)
   - OR manually upload WordPress files and create database

5. **Activate the theme:**
   - Log in to WordPress admin
   - Go to Appearance → Themes
   - Activate "Smart Accountant Theme"

### 000webhost

1. **Sign up at [000webhost](https://www.000webhost.com/)**

2. **Create a new website** with WordPress

3. **Upload theme via File Manager or FTP:**
   - Navigate to `public_html/wp-content/themes/`
   - Upload the `smart-accountant-theme` folder

4. **Activate the theme** in WordPress admin

### Temporary WordPress Sites

For quick testing, use these services:

- **[TasteWP](https://tastewp.com/)** - Instant WordPress site (lasts 7 days)
- **[InstaWP](https://instawp.com/)** - Quick WordPress staging sites

Steps:
1. Create instant site
2. Access WordPress admin
3. Upload theme via Appearance → Themes → Add New → Upload Theme
4. Zip the `smart-accountant-theme` folder first
5. Upload and activate

---

## Deploy to DigitalOcean or VPS

### Prerequisites
- A VPS with Ubuntu 20.04+ or similar
- Root or sudo access
- A domain name (can use DigitalOcean's free subdomain)

### Quick Deploy Steps

1. **Connect to your VPS**
   ```bash
   ssh root@your-server-ip
   ```

2. **Install Docker**
   ```bash
   curl -fsSL https://get.docker.com -o get-docker.sh
   sh get-docker.sh
   apt-get install docker-compose-plugin
   ```

3. **Clone and start the application**
   ```bash
   git clone https://github.com/abdulladarwish2025/wordpress.git
   cd wordpress
   cp .env.example .env
   # Edit .env with your domain and passwords
   docker-compose up -d
   ```

4. **Configure firewall (if needed)**
   ```bash
   ufw allow 8080/tcp
   ufw allow 80/tcp
   ufw allow 443/tcp
   ```

5. **Access via IP or domain**
   - http://your-server-ip:8080

### Using nginx as reverse proxy (Production)

If you want to use a proper domain without :8080 in URL:

1. **Install nginx**
   ```bash
   apt-get install nginx
   ```

2. **Create nginx config**
   ```bash
   nano /etc/nginx/sites-available/wordpress
   ```
   
   Add:
   ```nginx
   server {
       listen 80;
       server_name your-domain.com www.your-domain.com;

       location / {
           proxy_pass http://localhost:8080;
           proxy_set_header Host $host;
           proxy_set_header X-Real-IP $remote_addr;
           proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
           proxy_set_header X-Forwarded-Proto $scheme;
       }
   }
   ```

3. **Enable site**
   ```bash
   ln -s /etc/nginx/sites-available/wordpress /etc/nginx/sites-enabled/
   nginx -t
   systemctl restart nginx
   ```

4. **Add SSL with Let's Encrypt** (optional but recommended)
   ```bash
   apt-get install certbot python3-certbot-nginx
   certbot --nginx -d your-domain.com -d www.your-domain.com
   ```

---

## Environment Variables

The `.env` file controls your WordPress configuration:

| Variable | Description | Default |
|----------|-------------|---------|
| `WORDPRESS_DB_NAME` | Database name | `wordpress` |
| `WORDPRESS_DB_USER` | Database user | `wordpress` |
| `WORDPRESS_DB_PASSWORD` | Database password | `wordpress_password` |
| `MYSQL_ROOT_PASSWORD` | MySQL root password | `root_password` |
| `WORDPRESS_TABLE_PREFIX` | Table prefix | `wp_` |
| `WORDPRESS_DEBUG` | Enable debug mode | `0` |

**Security Note:** Always change default passwords in production!

---

## Theme Activation

Once WordPress is installed:

1. **Log in to WordPress Admin**
   - URL: `http://your-domain/wp-admin`
   - Use the credentials you created during installation

2. **Navigate to Themes**
   - Go to **Appearance → Themes**

3. **Activate Smart Accountant Theme**
   - Find "Smart Accountant Theme" in the list
   - Click **Activate**

4. **Verify Theme is Active**
   - Visit your site's homepage
   - You should see the Smart Accountant theme design with:
     - Arabic RTL layout
     - Primary blue color (#1855e2)
     - Material icons
     - Tailwind CSS styling

---

## Troubleshooting

### Theme not showing up
- Make sure the theme folder is in `wp-content/themes/`
- Folder name should be `smart-accountant-theme`
- Check file permissions (755 for folders, 644 for files)

### Styling issues
- The theme uses Tailwind CSS from CDN - ensure you have internet connection
- Check browser console for any JavaScript errors
- Clear WordPress cache if using a caching plugin

### Database connection errors
- Verify database credentials in `.env` file
- Make sure MySQL container is running: `docker-compose ps`
- Check logs: `docker-compose logs wordpress`

### Port already in use
- Change port in docker-compose.yml from 8080 to another port like 8090
- Run `docker-compose down` and `docker-compose up -d` again

---

## Stopping the Application

To stop the Docker containers:
```bash
docker-compose down
```

To stop and remove all data (including database):
```bash
docker-compose down -v
```

---

## Support

For issues or questions:
- Check WordPress logs in container: `docker-compose logs wordpress`
- Check database logs: `docker-compose logs db`
- Visit WordPress support forums
- Review theme files in `wp-content/themes/smart-accountant-theme/`

---

## Theme Features

The Smart Accountant theme includes:
- ✅ RTL (Right-to-Left) support for Arabic
- ✅ Tailwind CSS for modern styling
- ✅ Material Symbols icons
- ✅ Dark mode ready (class-based)
- ✅ Responsive design
- ✅ Custom color scheme
- ✅ Navigation menu support
- ✅ Widget support
- ✅ Post thumbnails
- ✅ Custom pagination

Enjoy your Smart Accountant WordPress site! 🎉
