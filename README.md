# Smart Accountant WordPress Theme

A modern, professional WordPress theme designed for accounting and financial services blogs, built with Tailwind CSS and Arabic RTL support.

## 🌟 Features

- **RTL Support**: Fully optimized for Arabic (right-to-left) language
- **Modern Design**: Built with Tailwind CSS for a clean, professional look
- **Material Icons**: Integrated Material Symbols for beautiful iconography
- **Responsive**: Mobile-friendly design that works on all devices
- **Dark Mode Ready**: Includes dark mode color schemes
- **Custom Colors**: Professional blue color scheme optimized for finance
- **SEO Friendly**: Proper HTML structure and meta tags
- **Widget Support**: Sidebar and widget areas for extended functionality

## 🚀 Quick Start

### Option 1: Docker (Recommended)

The fastest way to get started:

```bash
# Clone the repository
git clone https://github.com/abdulladarwish2025/wordpress.git
cd wordpress

# Run the setup script
./setup.sh
```

Then open http://localhost:8080 and complete the WordPress installation.

### Option 2: Manual Setup

1. Download or clone this repository
2. Upload the `wp-content/themes/smart-accountant-theme` folder to your WordPress installation
3. Activate the theme from WordPress admin (Appearance → Themes)

## 📦 What's Included

```
wordpress/
├── wp-content/
│   └── themes/
│       └── smart-accountant-theme/
│           ├── header.php          # Site header and navigation
│           ├── footer.php          # Site footer
│           ├── index.php           # Main blog template
│           ├── sidebar.php         # Sidebar template
│           ├── functions.php       # Theme functions and setup
│           └── style.css           # Theme metadata
├── docker-compose.yml              # Docker configuration
├── .env.example                    # Environment variables template
├── setup.sh                        # Quick setup script
├── deploy.sh                       # Deployment helper script
├── DEPLOYMENT.md                   # Detailed deployment guide
└── README.md                       # This file
```

## 🌐 Deploy to Temporary Domain

See [DEPLOYMENT.md](DEPLOYMENT.md) for comprehensive deployment instructions including:

- **Docker deployment** (local and VPS)
- **Free hosting** (InfinityFree, 000webhost)
- **Quick staging sites** (TasteWP, InstaWP)
- **VPS deployment** with nginx and SSL
- **ngrok for temporary public URLs**

### Quick Deploy with ngrok

For instant public access (temporary URL):

```bash
# Start WordPress with Docker
docker-compose up -d

# In another terminal, start ngrok
ngrok http 8080
```

You'll get a public URL like `https://abc123.ngrok.io` that anyone can access!

## 🎨 Theme Customization

The theme uses Tailwind CSS with custom configuration. Colors and styles can be modified in `functions.php`:

- **Primary Color**: `#1855e2` (Professional Blue)
- **Primary Dark**: `#103cb0`
- **Fonts**: Noto Sans Arabic + Manrope
- **RTL Direction**: Enabled by default

## 📝 WordPress Requirements

- WordPress 5.0 or higher
- PHP 7.4 or higher
- MySQL 5.6 or higher

## 🛠️ Development

### Local Development with Docker

```bash
# Start containers
docker-compose up -d

# View logs
docker-compose logs -f wordpress

# Stop containers
docker-compose down

# Stop and remove all data
docker-compose down -v
```

### Accessing Services

- **WordPress**: http://localhost:8080
- **phpMyAdmin**: http://localhost:8081 (database management)

### Default Credentials (Docker)

- **Database**: wordpress
- **User**: wordpress
- **Password**: wordpress_password

⚠️ **Change these in production!** Edit `.env` file.

## 🔒 Security Notes

When deploying to production:

1. Change all default passwords in `.env`
2. Use strong, unique passwords
3. Enable HTTPS/SSL
4. Keep WordPress and theme updated
5. Use security plugins (e.g., Wordfence)
6. Regular backups

## 📚 Additional Resources

- [WordPress Theme Development](https://developer.wordpress.org/themes/)
- [Tailwind CSS Documentation](https://tailwindcss.com/docs)
- [Docker Documentation](https://docs.docker.com/)
- [WordPress Codex](https://codex.wordpress.org/)

## 🤝 Support

For issues or questions:

1. Check [DEPLOYMENT.md](DEPLOYMENT.md) for deployment help
2. Review theme files in `wp-content/themes/smart-accountant-theme/`
3. Check WordPress and Docker logs
4. Open an issue on GitHub

## 📄 License

This theme is open source and available for use in your projects.

## 🎉 Credits

- **Theme Author**: Jules
- **Icons**: Material Symbols by Google
- **CSS Framework**: Tailwind CSS
- **Fonts**: Noto Sans Arabic, Manrope (Google Fonts)

---

**Ready to launch?** Run `./setup.sh` to get started! 🚀