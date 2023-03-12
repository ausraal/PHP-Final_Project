# PHP-Final_Project
PHP Project - Dog grooming reservation application
Project - Dog grooming reservation application built with PHP using Model-View-Controller (MVC) design pattern, Composer for dependency management, and JSON for data storage. It was written using plain HTML, CSS and PHP with no frameworks. Code Editor used - PHP Storm 8.2. Project has reservation form with 6 fields to complete for the user: owner name, dog name, dog breed/size, visit date, visit time, phone number. 3 fileds are required to be completed before submiting the form (HTML-part checking is applied). It then uses Router to separate job per URL and Controllers to perform most of the work. After form is submited another page with all the list of reservations is displayed. User can then change or delete their reservation. Also there is a field in the main page to search for reservation by owner name. Server side input validation and sanitazion is only primitive and needs to be updated.
In order to run this project on your computer please follow instructions below.    
  0. Make sure you have some CodeEditor, XAMPP, Git and Composer installed on your computer.
	1. Open XAMPP Control Panel and turn on the Apache server.(Instructions can be found there:  https://www.jetbrains.com/help/phpstorm/installing-an-amp-package.html?keymap=primary_windows#integrating-xampp).
	2. Open a terminal in your code editor (PHPStorm or VS Code).
	3. Navigate to the directory where you want to store this project by entering cd and directory path in terminal.
	4. In terminal write: git clone  https://github.com/ausraal/PHP-Project.git .
	5. Download Composer from the official website:  https://getcomposer.org/download/
	6. Follow the instructions provided on the website to install Composer on your system.
	7. Write command composer install in Terminal in order to install project dependencies.
	8. Navigate to project directory in your code editor via Terminal using "cd" as described above.
	9. In Terminal write: php -S localhost:8080 .
	10. Open your browser and write here  http://localhost:8080/Views/form.php .
	11. It should open you initial registration form of this project. 
  You can now use the application and test its features.
