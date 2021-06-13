# 2021-1_OSS_FinalProject
22000453 SoeunYu

<h1>The Helper</h1>

This project is Implementation of functions to facilitate app design using LAMP with RasberryPi.


<h2>What does this project do?</h2>

This project is the version 1 of an app called 'the helper', and it made it possible to write down and delete functions that were thought of when designing the app. 


<h2>Why is this project useful?</h2>

Most of them exist for scheduling and distribution of work. By making a difference from these apps, I plan to create a program that helps the process of proposing and determining app functions in the pre-development stage.

<h3>You can..</h3>

- You can add a list of features to create.
- You can delete the created list.
- Data can be stored on the server.

<h2>How do i get started?</h2>

1. install apache2
```
sudo apt-get install apache2 php php-gd mariadb-client-10.0 mariadb-server-10.0 php-mysql phpmyadmin
```
2. set mysql
```
sudo mysql_secure_installation
```
3. set phpmyadmin
```
sudo dpkg-reconfigure phpmyadmin
```

<h2>Where can I get more helf if I need help?</h2>

Any questions or comments,
22000453@handong.edu

About open source:
https://github.com/0x416c616e/todolistapp

Program setting:
https://m.blog.naver.com/icbanq/221724781893

Login logic...
https://zzaps.tistory.com/16


<h2>My contribution to this project: 50%</h2>
```
1.Overall program design. (bootstrap)
2. Add and delete features.
3. App conception.
4. rebuild db
```
```
+-----------+--------------+------+-----+---------+----------------+
| Field     | Type         | Null | Key | Default | Extra          |
+-----------+--------------+------+-----+---------+----------------+
| priority  | varchar(100) | NO   |     | NULL    |                |
| todo_item | text         | NO   |     | NULL    |                |
| item_id   | int          | NO   | PRI | NULL    | auto_increment |
+-----------+--------------+------+-----+---------+----------------+
3 rows in set (0.00 sec)
```
<h2> what to do in the next version 
helps the process of proposing and determining app functions in the pre-development stage.
and visualize them.

<h2> youtube link
: 
