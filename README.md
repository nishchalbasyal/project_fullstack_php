 ## 🎥 Demo Video
 Click the Image
[![Demo Video](https://github.com/user-attachments/assets/612a5e98-f8d9-46af-966d-e8da8eb18ebf)](https://youtu.be/HQCy5T7tldk)

## 🚀 Setup Instructions  

Follow these steps to set up and run the project:  

### 1️⃣ Install XAMPP  
Download and install XAMPP from the official website:  
🔗 [Download XAMPP](https://www.apachefriends.org/)  

### 2️⃣ Clone This Repository  
Navigate to the `htdocs` directory in your XAMPP installation:
```sh
cd C:/xampp/htdocs
```

Then, clone the repository:
```sh
git clone https://github.com/nishchalbasyal/project_fullstack_php.git
```

### 3️⃣ Import the Database
1. Start **Apache** and **MySQL** from XAMPP Control Panel
2. Open **phpMyAdmin** (`http://localhost/phpmyadmin/`)
 4. Import the provided `ebpearls_asgmt.sql` file into phpMyAdmin

### 4️⃣ Run the Project
* Open the project in your browser:
```
http://localhost/project_fullstack_php/
```
* Your project is now up and running! 🎉

## 📡 API Endpoints

| Method | Endpoint | Description |
|--------|----------|-------------|
| **GET** | `/api/tasks` | Fetch all tasks |
| **POST** | `/api/tasks/` | Create a new task |
| **PUT** | `/api/tasks/update/?id=yourID` | Update a task |
| **DELETE** | `/api/tasks/delete/?id=yourID` | Delete a task |

📌 **Note:** Replace `yourID` with the actual task ID when making requests.

## 🛠️ Technology Used
* **SCSS** - For styling
* **HTML** - Structuring the web pages
* **JavaScript & jQuery** - Interactive UI & AJAX requests
* **PHP** - Backend logic & API handling
* **MySQL** - Database management

## 📚 References
This project was built using guidance from:
* GeeksforGeeks
* W3Schools
* ChatGPT

## 💡 Author
👤 **Nishchal Basyal**
🔗 [LinkedIn](https://www.linkedin.com/in/nishchalbasyal/)

---

🔹 *
