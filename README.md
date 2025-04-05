# 🌤 Weather App

A simple weather application that fetches and displays current weather data for a given city using the OpenWeatherMap API.

## 💡 Features

- Search for the weather by city name.
- Displays temperature in Celsius.
- Shows current weather description (e.g., sunny, cloudy, etc.).
- Includes additional weather details such as sunrise, sunset, wind speed, and humidity.
- User-friendly interface with a modern design.

## 🌍 Demo

You can try the weather application by visiting the live demo.

## 📜 Technologies Used

- **PHP** for server-side scripting.
- **cURL** for fetching data from the OpenWeatherMap API.
- **OpenWeatherMap API** for getting real-time weather data.
- **HTML5 & CSS3** for building the user interface.

## 🔧 Installation

To set up the project on your local machine, follow these steps:

### 1. Clone the repository:
```bash
git clone https://github.com/NoMercy404/WeatherApp.git
```
### 2. Navigate to the project folder:
```bash
cd WeatherApp
```
### 3. Create a new file named .env and add your OpenWeatherMap API key:
```bash
API_KEY="your-api-key-here"
```
### 4. Make sure you have PHP installed on your system.
You can download PHP from [here](https://www.php.net/downloads).

### 5. Start a local PHP server:
```bash
php -S localhost:8000
```
### 6. Open your browser and go to <strong> http://localhost:8000 </strong> to see the app in action.

<img src="https://github.com/user-attachments/assets/e96152db-6d8e-4247-a1d2-645b6d6400ae" width="100" height="100">

![image](https://github.com/user-attachments/assets/e96152db-6d8e-4247-a1d2-645b6d6400ae)
### 💬 How to Use
<ol>
  <li>Enter the name of the city in the input box.</li>
  <li>Click the "Get Weather" button.</li>
  <li>The weather data for the specified city will be displayed below the form.</li>
</ol>

![image](https://github.com/user-attachments/assets/a7d3c8c1-6130-49c2-a1ac-280241053148)


### 🚨 Error Handling
<ol>
  <li>If the entered city does not exist or cannot be found, the app will display an error message: "City not found."</li>
  <li>In case of an invalid API key or another issue, an appropriate error message will be shown.</li>
</ol>

![image](https://github.com/user-attachments/assets/b9e86e03-9d7b-405b-8a41-0824bee5be5d)










