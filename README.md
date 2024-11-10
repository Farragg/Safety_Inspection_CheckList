# <div align="center">Hey 👋, I'm Farrag!</div>

----

## <div align="center"> Connect with me

<div align="center">
 <a href="https://github.com/Farragg" target="_blank">
<img src=https://img.shields.io/badge/github-%2324292e.svg?&style=for-the-badge&logo=github&logoColor=white alt=github style="margin-bottom: 5px;" />
<a href="https://linkedin.com/in/farrag-mohamed" target="_blank">
<img src=https://img.shields.io/badge/linkedin-%231E77B5.svg?&style=for-the-badge&logo=linkedin&logoColor=white alt=linkedin style="margin-bottom: 5px;" />
</a>
</a>  
</div>

## Welcome! Glad to see you here


## DAILY SAFETY INSPECTION CHECKLIST

The Safety Checklist Web Form allows inspectors to complete a set of predefined safety questions, with the option to answer each with "Yes" or "No." Additional fields allow users to provide their name, select the current date and time, and leave optional comments for each question. This form is designed to capture essential safety information in a standardized format for easy review and record-keeping.
The site is translatable in both Arabic and English, ensuring accessibility for users who prefer either language. This bilingual support enhances usability and ensures that essential safety information can be accurately recorded by users in both languages.

## Table of Contents
- [Installation](#installation)
- [Approach and Thought Process](#approach-and-thought-process)
- [Database Schema Design](#database-schema-design)
- [Assumptions or Challenges](#assumptions-or-challenges)


## Installation

Follow these steps to get your development environment up and running.

### 1. Clone the Repository

Clone the project repository to your local machine:

```bash
git clone https://github.com/Farragg/Safety_Inspection_CheckList.git
cd Safety_Inspection_CheckList
```
### 2. Install Dependencies

Install all the required dependencies using Composer and NPM:

```bash
composer install
npm install
```

### 3. Set Up Environment Variables

Create a .env file by copying the example file:

```bash
cp .env.example .env
```

### 4.Generate the Application Key

Generate the Laravel application key:

```bash
php artisan key:generate
```

### 5. Run Migrations

Migrate the database to set up the required tables:
```bash
php artisan migrate
```
### 6. Run the Application

Start the Laravel development server:
```bash
php artisan serve
```
application should now be running at http://localhost:8000.

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).


## Approach and Thought Process

The project was designed to be user-friendly, secure, and scalable. Here’s an overview of the design approach:

#### 1.Form Design: The form uses radio buttons for "Yes" and "No" answers, with optional text areas for comments. This keeps the form simple while allowing for more detailed responses if needed.

#### 2.Data Validation: Laravel’s validation rules ensure that the form fields contain valid inputs (e.g., name is required, date and time are valid).

#### 3.Backend Storage: Each submission is saved to a database with fields for the user's name, responses to each question, comments, date, and time. This setup makes it easy to retrieve and analyze the data later.

#### 4.Repository Design Pattern: The Repository pattern was implemented to decouple the application’s data access layer from the business logic. By using repositories, we can easily manage data access logic and maintain a cleaner architecture, making future updates easier and more manageable.

#### 5.SOLID Principles: The project was developed in alignment with SOLID principles

#### 6.Security: User inputs are sanitized to prevent SQL injection, and only authorized users can access the form.


## Database Schema Design

The database schema for this form includes a single table to store each checklist submission. Here’s an overview of the structure:

### 1. Safety_Checklists Table

- **id**: INT (primary key)
- **inspectorName**: STRING (Name of the person completing the checklist)
- **date**: DATE (Date of the checklist submission)
- **time**: TIME (Time of the checklist submission)
- **floor**: BOOLEAN (1, 0) (Response to Question 1)
- **floor_comment**: TEXT (Optional comment for Question 1)
- **lighting**: BOOLEAN (1, 0) (Response to Question 2)
- **lighting_comment**: TEXT (Optional comment for Question 2)
- **emergency**: BOOLEAN (1, 0) (Response to Question 3)
- **emergency_comment**: TEXT (Optional comment for Question 3)
- **fireExtinguishers**: BOOLEAN (1, 0) (Response to Question 4)
- **fireExtinguishers_comment**: TEXT (Optional comment for Question 4)
- **trained**: BOOLEAN (1, 0) (Response to Question 5)
- **trained_comment**: TEXT (Optional comment for Question 5)
- **aidKits**: BOOLEAN (1, 0) (Response to Question 6)
- **aidKits_comment**: TEXT (Optional comment for Question 6)
- **contactNumbers**: BOOLEAN (1, 0) (Response to Question 7)
- **contactNumbers_comment**: TEXT (Optional comment for Question 7)
- **detectors**: BOOLEAN (1, 0) (Response to Question 8)
- **detectors_comment**: TEXT (Optional comment for Question 8)
- **sprinklerSystem**: BOOLEAN (1, 0) (Response to Question 9)
- **sprinklerSystem_comment**: TEXT (Optional comment for Question 9)
- **evacuation**: BOOLEAN (1, 0) (Response to Question 10)
- **evacuation_comment**: TEXT (Optional comment for Question 10)
- **employeesAwareness**: BOOLEAN (1, 0) (Response to Question 11)
- **employeesAwareness_comment**: TEXT (Optional comment for Question 11)
- **PPE**: BOOLEAN (1, 0) (Response to Question 12)
- **PPE_comment**: TEXT (Optional comment for Question 12)
- **trainedPPE**: BOOLEAN (1, 0) (Response to Question 13)
- **trainedPPE_comment**: TEXT (Optional comment for Question 13)
- **trippingHazards**: BOOLEAN (1, 0) (Response to Question 14)
- **trippingHazards_comment**: TEXT (Optional comment for Question 14)
- **safePassage**: BOOLEAN (1, 0) (Response to Question 15)
- **safePassage_comment**: TEXT (Optional comment for Question 15)
- **created_at**: TIMESTAMP
- **updated_at**: TIMESTAMP


## Assumptions or Challenges

### Assumptions

- **The checklist questions are static and will not change over time.**
- **Users completing the checklist are trained to understand each question without additional guidance.**

### Challenges

- **Data Integrity**: Ensuring that each answer is recorded accurately in the database, especially since some fields are optional (like comments).
- **Optimized Updates**: When updating a checklist entry, the application uses the ```isDirty``` method to detect and update only the fields that have changed. This optimization reduces unnecessary database updates, improving performance and maintaining efficient use of resources.
- **User Interface Design**: Making the form easy to use while accommodating various device sizes and ensuring that the input fields are accessible and easy to interact with.
- **Security**: Ensuring that user inputs are validated and sanitized to prevent injection attacks, especially given that the form might be accessible to multiple users.
