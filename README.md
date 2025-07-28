# DISC Personality Assessment System

A comprehensive web application built with Laravel for conducting DISC personality assessments and managing results.

## About DISC Assessment

The DISC assessment is a behavioral assessment tool that helps identify personality types and behavioral tendencies. This application provides:

- **D (Dominance)**: Direct, results-oriented, firm, strong-willed, and forceful
- **I (Influence)**: Sociable, talkative, optimistic, enthusiastic, and persuasive  
- **S (Steadiness)**: Even-tempered, accommodating, patient, humble, and tactful
- **C (Conscientiousness)**: Private, analytical, logical, critical thinker, and reserved

## Features

### User Features
- User registration and authentication
- Complete DISC personality assessment
- View assessment results and personality analysis
- Personal diagnosis history

### Admin Features
- Dashboard with system overview
- Manage assessment symptoms/questions (Gejala)
- Manage decision criteria (Keputusan)
- View all user diagnoses
- Add/remove assessment criteria

### Technical Features
- Role-based access control (User/Admin)
- Responsive design with Tailwind CSS and DaisyUI
- Real-time assessment processing
- Secure authentication system

## Technology Stack

- **Backend**: Laravel 12.x (PHP 8.2+)
- **Frontend**: Vite, Tailwind CSS 4.x, DaisyUI 5.x
- **Database**: MySQL
- **Authentication**: Laravel's built-in authentication
- **Build Tools**: Vite 6.x

## Installation

### Prerequisites
- PHP 8.2 or higher
- Composer
- Node.js and npm
- MySQL database

### Setup Steps

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd es-disc-laravel
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Environment Configuration**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Database Setup**
   - Create a MySQL database named `es-disc-laravel`
   - Update your `.env` file with database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=es-disc-laravel
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

6. **Import Database**
   ```bash
   mysql -u your_username -p es-disc-laravel < es-disc-laravel.sql
   ```

7. **Build Assets**
   ```bash
   npm run build
   ```

8. **Start Development Server**
   ```bash
   php artisan serve
   ```

   The application will be available at `http://localhost:8000`

## Development

### Running in Development Mode

1. **Start Laravel development server**
   ```bash
   php artisan serve
   ```

2. **Start Vite development server** (in another terminal)
   ```bash
   npm run dev
   ```

### Available NPM Scripts
- `npm run dev` - Start Vite development server
- `npm run build` - Build assets for production

### Available Artisan Commands
- `php artisan serve` - Start development server
- `php artisan migrate` - Run database migrations
- `php artisan tinker` - Access Laravel REPL

## Usage

### For Users
1. Register for a new account or login
2. Navigate to "DISC Assessment" to start the test
3. Complete the assessment form with honest responses
4. View your personality analysis and results
5. Access your diagnosis history anytime

### For Administrators
1. Login with admin credentials
2. Access the admin dashboard
3. Manage assessment questions and criteria
4. Monitor user assessments and results
5. Add or remove assessment parameters

## Project Structure

```
├── app/
│   ├── Http/Controllers/     # Application controllers
│   ├── Models/              # Eloquent models
│   └── Providers/           # Service providers
├── database/                # Database migrations and seeders
├── public/                  # Public assets
├── resources/
│   ├── views/              # Blade templates
│   └── js/                 # Frontend JavaScript
├── routes/                 # Application routes
├── storage/                # File storage
└── tests/                  # Application tests
```

## Key Models

- **User**: User authentication and management
- **Diagnosa**: Assessment results and diagnosis data
- **Gejala**: Assessment symptoms/questions
- **Keputusan**: Decision criteria for assessments
- **SifatDISC**: DISC personality traits and descriptions
- **KondisiUser**: User condition parameters

## Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Support

For support and questions, please open an issue in the repository or contact the development team.
