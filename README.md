# Internshala
A mock internship-portal created for the evaluation by Internshala. The online Internship portal application allows students and recruiters to connect. The application provides the ability for students to create their accounts, upload their profile and resume, search, apply, view different openings. The application provides the ability for companies to create their accounts, search candidates, create internship postings, and view candidates applications.

## Prerequisites
You need the LAMP stack.
[Installing LAMP](https://howtoubuntu.org/how-to-install-lamp-on-ubuntu)

## Installing
```
Paste the repository in /var/www/html/
Edit the db.php file, and enter your PhpMyAdmin credentials, ignore if default.
Add a new database named "jobportal" in your PhpMyAdmin and import the file "database.sql" into the same.
```

## Features

* The database has a few sample companies, users and internship listings. (10 companies, 5 students, 5 internship listings and 1 admin)
* Responsive website made using Bootstrap, optimised for mobile view.
* Passwords are hashed for improved security.
* Email confirmation mails while signup. (This is not working in the demo hosting, because it being a free hosting site) So when you create a new candidate account it will not send any emails. So you must go to database, find that user and set active=1 in order to make that account login.
* New company registrations have to be verified by the admin before they post listings.

## Contributing

When contributing to this repository, please first discuss the change you wish to make via issue, email, or any other method with the owners of this repository before making a change.

### Pull Request Process
* Ensure any install or build dependencies are removed before the end of the layer when doing a build.
* Update the README.md with details of changes to the interface, this includes new environment variables, exposed ports, useful file locations and container parameters.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
