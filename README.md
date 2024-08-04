# Work Waves Job Listings

This application allows users to post jobs, view job listings, perform global searches for available jobs, and filter jobs by tags. Both logged-in users and guests can view job listings.

## Features

-   **User Authentication**: Users can register, log in, and log out.
-   **Job Posting**: Logged-in users can post new job listings.
-   **View Jobs**: Anyone can view posted jobs.
-   **Global Search**: Search for jobs using keywords.
-   **Tag Filtering**: Click on job tags to view all jobs associated with that tag.

## Installation

To get the application up and running, follow these steps:

### Prerequisites

Ensure you have the following installed on your system:

-   PHP
-   Node.js
-   Composer

### Steps

1. **Clone the Repository**:

    ```bash
    git clone https://github.com/ochicode/work-waves.git
    cd work-waves
    ```

2. **Install PHP Dependencies**:

    ```bash
    composer install
    ```

3. **Install Node.js Dependencies**:

    ```bash
    npm install
    ```

4. **Environment Setup**:

    ```bash
    cp .env.example .env
    ```

5. **Database Migration**:
   Run the migrations:

    ```bash
    php artisan migrate
    ```

    To seed database with dummy data:

    ```bash
    php artisan db:seed
    ```

6. **Serve the Application**:

    ```bash
    php artisan serve
    ```

7. **View the Application**:
   Open your web browser and navigate to:
    ```
    http://127.0.0.1:8000
    ```

## Usage

-   Register or log in to post a job.
-   View available jobs from the homepage.
-   Use the search bar to find jobs by keywords.
-   Click on job tags to show job listings by tag.

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
