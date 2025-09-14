# IntroExtro - Introvert vs Extrovert Personality Prediction Web App

A machine learning web application that predicts whether a person is more of an introvert or extrovert, built using the dataset from the Kaggle competition “Predict the Introverts from the Extroverts (Playground Series S5E7)”. The model is trained with features from the competition’s dataset, and the web app allows users to input their own feature values to see the predicted personality type. Includes data preprocessing, feature engineering, model training/inference, and a user-friendly front-end.

## Demo Images
<div align="center">
  <table>
    <tr>
      <td><img src="/Images/image1.png" width="300" alt="Home Page"></td>
      <td><img src="/Images/image2.png" width="300" alt="Home Page"></td>
      <td><img src="/Images/image3.png" width="300" alt="Home Page"></td>
    </tr>
        <tr>
      <td><img src="/Images/image4.png" width="300" alt="Home Page"></td>
      <td><img src="/Images/image5.png" width="300" alt="Home Page"></td>
      <td><img src="/Images/image6.png" width="300" alt="Home Page"></td>
    </tr>
      <tr>
      <td><img src="/Images/image7.png" width="300" alt="Home Page"></td>
      <td><img src="/Images/image8.png" width="300" alt="Home Page"></td>
   </tr>



  </table>
</div>

## Technologies Used

**Backend**
- Laravel (PHP) – Application backend & business logic
- Flask (Python) – ML model serving & API 

**Frontend**
- Laravel Blade – Frontend templating
- Bootstrap 5 – UI styling & responsive design
- jQuery – Dynamic UI interactions
- Toastr.js – Toast notifications
- FontAwesome – Icons

**Database**
- MySQL – Data storage (patients, appointments, orders, scan reports)  
- phpMyAdmin – Database management  

## Installation
1. Clone the project  
2. Navigate to the project's root directory using terminal  
3. Create `.env` file - `cp .env.example .env`  
4. Execute `composer install`  
5. Execute `npm install`  
6. Set application key - `php artisan key:generate --ansi`  
7. Execute migrations and seed data - `php artisan migrate --seed`  
8. Start Artisan server - `php artisan serve`  
