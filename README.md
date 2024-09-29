# Weather Application

This is a simple weather application that uses the Weatherbit API to display current weather information and a 16-day forecast. Users can input a city and country code to fetch the weather details. The application also includes features like caching of weather data, search history, and pagination for both the forecast and the search history.

## Features
- **Current Weather**: Display weather details such as temperature, wind speed, humidity, and air quality index.
- **16-Day Forecast**: Provides a 16-day weather forecast with maximum and minimum temperatures, precipitation, and more.
- **Search History**: Keeps track of recent searches and allows navigation through past searches with pagination.
- **Data Caching**: Weather data is cached for 10 minutes to minimize repeated API calls.
- **Responsive Design**: Works well on desktop and mobile devices.
- **Loading Animation**: Uses a Lottie animation to indicate loading when fetching weather data.

## Technologies Used
- **Frontend**:
  - HTML5, CSS3, JavaScript
  - Lottie for loading animations
- **Backend**:
  - PHP for handling API requests
- **API**:
  - Weatherbit API for weather data (`/current` for current weather and `/forecast/daily` for the 16-day forecast)

## Prerequisites
Before setting up the project, make sure you have the following:
- A Weatherbit API key. You can obtain one by signing up [here](https://www.weatherbit.io/account/create).
- A local server for running PHP (e.g., XAMPP, WAMP, or MAMP) or an applicable local server.

## Setup Instructions

### 1. Clone the Repository
First, clone the repository to your local machine:

```bash
git clone https://github.com/ChandaMC/API_Calls.git
cd API_Calls
```

### 2. Add Your API Key
To make API requests, you need to add your Weatherbit API key in the PHP backend:

1. Open the `weather.php` file.
2. Replace the placeholder API key with your own:

```php
$apiKey = "YOUR_API_KEY"; // Replace with your Weatherbit API key
```

### 3. Running the Application
1. **Using a Local Server (PHP)**:
   - Start a local server (e.g., XAMPP or MAMP) and place the project folder in the server's `htdocs` directory.
   - Run the server and navigate to `http://localhost/API_CALLS/` in your browser.

2. **Using a Local Web Server for Frontend (Optional)**:
   - If you're only running the frontend, you can use a simple local server to serve the files:
     ```bash
     npx live-server
     ```

### 4. Usage Instructions
1. Enter the name of a city and a country code (e.g., `Lusaka` for the city and `ZM` for the country code).
2. Click the **Get Weather** button to fetch the weather data.
3. The app will display the current weather and the 16-day forecast.
4. The **Search History** section will list your last 5 searches, with pagination buttons to navigate.
5. You can also clear the input fields and the search history using the **Clear** buttons.

## API Key Setup
To use the Weatherbit API, you'll need to sign up and get your API key [here](https://www.weatherbit.io/account/create).

After obtaining the API key, insert it into the `weather.php` file:

```php
$apiKey = 'YOUR_API_KEY'; // Replace with your Weatherbit API key
```

## Live Demo
You can check the web app in action here:
```markdown
- [Live Demo](https://weatherbit-weather-app.tiiny.io/)
```

## Folder Structure
```bash
API_CALLS/
├── index.html        # Main HTML file
├── style.css         # Stylesheet
├── script.js         # JavaScript handling frontend functionality
├── weather.php       # Backend PHP file for handling API requests
├── README.md         # Documentation
└── ...
```

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
