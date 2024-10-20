## Frame Generator™ ![](/public/favicon.ico)

Welcome to **Frame Generator™**, a web application that allows users to upload an image and add a customized banner (frame) to it. This app leverages the power of Fabric.js for canvas manipulation and Tailwind CSS for styling, providing a smooth user experience for generating framed images. 

## Features
- Upload an image and apply a selected banner/frame.
- Crop or Drag the uploaded image and apply a selected banner/frame.
- Responsive design to adapt to mobile and desktop views.
- Download the final framed image.
- Track the number of downloads for each banner.
- Clean and simple UI with smooth animations using Tailwind CSS.
  
## Technologies Used
- **Frontend**: Tailwind CSS, HTML, JavaScript (jQuery)
- **Backend**: Laravel (PHP)
- **Canvas Manipulation**: Fabric.js
- **Database**: MySQL (or any supported Laravel database)
- **Others**: Vite for asset bundling, Prism.js for syntax highlighting

## Admin Dashboard

The project includes an Admin Dashboard built with [Filament PHP](https://filamentphp.com/). The admin can manage banners: add new banners, view the list of banners, track the number of downloads, edit, and delete banners.

NB: The user needs to login to add Banner to the View page.

## Installation

### Prerequisites
Ensure you have the following installed:
- PHP 8.0 or higher
- Composer
- Node.js & npm
- MySQL (or any other database supported by Laravel)

### Steps
1. **Clone the repository:**
   ```bash
   git clone https://github.com/yourusername/Frame-App.git
   cd Frame-App
   ```

2. **Install dependencies:**
   Install PHP dependencies using Composer:
   ```bash
   composer install
   ```

   Install Node.js dependencies:
   ```bash
   npm install
   ```

3. **Set up environment:**
   Copy the `.env.example` file and configure your environment variables:
   ```bash
   cp .env.example .env
   ```

   Update the `.env` file with your database credentials and other environment variables like `APP_URL`.

4. **Generate application key:**
   ```bash
   php artisan key:generate
   ```

5. **Run migrations**
   ```bash
   php artisan migrate
   ```

6. **Start the development server:**
   Compile assets with Vite and run the Laravel server:
   ```bash
   npm run dev
   php artisan serve
   ```

   The application will now be accessible at `http://localhost:8000`.

### Setting up the Admin Dashboard

1. **Create an Admin User**  
   After cloning the project and setting it up, you will need to create an admin user. Filament's admin credentials are not seeded by default, so you'll need to manually create an admin user.

   Run the following command in your terminal:

   ```bash
   php artisan make:filament-user
   ```

   You will be prompted to enter the admin's name, email, and password.

2. **Admin Capabilities**
   - **Add New Banners**: The admin can upload and manage banners.
   - **Banner List**: View a list of banners, including the number of times each has been downloaded.
   - **Edit/Delete Banners**: The admin can modify or delete banners as needed.
   - **Add/Remove User**: The admin can Add or remove users as needed.(There is no Role/Permission functionality)

## Usage
1. **Access the Admin Dashboard**
   Follow Admin Dashboard setup to access the Admin Dashboard. 

2. **Add your desired frame**
   You can add your own frame to use it. After opening the Admin Dashboard Go to Banners and Add your desired frame.

3. **Access the home page:**
   On the home page, you will be presented with a selection of banners. Choose a banner by clicking on the image.
   
4. **Upload an image:**
   After selecting a banner, upload an image by clicking the "Choose a Photo" button. Ensure the image dimensions are at least 400px by 400px for optimal quality.

5. **Preview and download:**
   Once the image is uploaded, it will appear in the preview panel with the selected banner overlay. Click the "Download" button to download the final image to your device.

6. **Track downloads:**
   The app tracks the number of times each banner has been used for downloads. This is displayed below the download button.

## File Structure

```bash
Frame-App/
├── app/                  # Laravel application files
├── public/               # Public assets like images, compiled CSS, JS
├── resources/
│   ├── css/              # Stylesheets
│   ├── js/               # JavaScript files
│   └── views/            # Blade templates (HTML)
├── routes/
│   └── web.php           # Web routes
├── database/             # Migrations and seeders
├── .env.example          # Environment file example
├── composer.json         # PHP dependencies
├── package.json          # Node.js dependencies
└── vite.config.js        # Vite bundler config
```

## Contributing

Contributions are welcome! Please follow these steps to contribute:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/new-feature`).
3. Make your changes.
4. Commit your changes (`git commit -m 'Add new feature'`).
5. Push to the branch (`git push origin feature/new-feature`).
6. Create a Pull Request.

## License

This project is licensed under the MIT License. 
