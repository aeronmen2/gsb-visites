## Project Title: Gestion des Visites (Visit Management)

### Introduction

This project is designed to streamline and manage the activities of medical sales representatives (MSRs) who work for the pharmaceutical company GSB (Galaxy Swiss Bourdin). The primary task of MSRs is to visit healthcare professionals to promote the company's products. This system helps in recording, managing, and analyzing the visits and interactions between MSRs and healthcare professionals.

### Project Context

GSB is a pharmaceutical company whose products are mainly promoted by MSRs. These representatives visit doctors, specialists, and hospital departments to update them about the company's products. The system digitalizes the visit reports to improve goal setting and budget allocation.

### Use Cases

1. **Report Creation:**

   - MSRs can create detailed reports of their visits.
   - The system allows selecting a doctor, specifying the date, visit motive, medications presented, and samples given.
   - These reports are saved in the system for future reference.

2. **Report Modification:**

   - MSRs can modify existing reports.
   - The system provides forms to change details of the reports, such as the visit motive and summary.

3. **Manage Doctors:**
   - View and update doctor's information.
   - Search for doctors and view their visit history.
   - Directly call a doctor from the system.

### Technologies Used

- **HTML:** Structures the website.
- **CSS:** Styles the website.
- **JavaScript:** Adds interactivity.
- **jQuery:** Utilized for enhancing table functionalities with DataTables.
- **DataTables:** Formats tables for better usability.
- **MAMP:** Local server for hosting the website with a MySQL database.

### Application Features

1. **Login System:**

   - Users must log in to access the system.
   - The login page collects the username and password, verifies them, and initiates a session upon successful authentication.

2. **Navigation Bar:**

   - Provides quick access to different sections such as doctors and reports.

3. **Logout:**

   - Allows users to securely log out of the system.
   - Ends the session and ensures data security.

4. **Connection Verification:**

   - Continuously checks if a user is logged in to prevent unauthorized access.
   - Displays relevant content based on the user's login status.

5. **Report Creation:**

   - Allows MSRs to input visit details including the date, motive, summary, medications, and quantities.
   - Provides dropdown lists for selecting doctors and medications.
   - Saves the reports in the database and confirms successful creation.

6. **Report and Doctor Tables:**

   - Displays lists of reports and doctors using DataTables for pagination and search functionality.
   - Includes buttons for modifying information and viewing past reports.

7. **Modification of Reports and Doctors:**
   - Users can update the information of doctors and reports via forms.
   - The system ensures the updated data is saved in the database.

### Documents and Structure

- **MCD (Model Conceptual Data):** Defines the database schema and relationships.
- **MLR (Logical Data Model):** Outlines the logical structure of the data.

### Project Directory Structure

```
├── Connexion
├── Médecins
│   ├── Listes Médecins
│   ├── Modification Médecins
├── Rapports
│   ├── Création Rapport
│   ├── Modification Rapports
│   ├── Listes Rapports
├── Accueil
├── Déconnexion
```

### Conclusion

The "Gestion des Visites" project is a comprehensive system designed to manage and streamline the reporting and management tasks of MSRs at GSB. It ensures efficient data handling, security, and usability, making it an essential tool for pharmaceutical sales management.
