1. download the folder/files
2. cd to the folder and write the command 'docker-compose up --build'
3. you would need go run apache and mysql on xampp to view the database
4. open the php website on localhost:3000 and the mysql database on localhost:8000
5. create the user table on mysql database for storing the user input enteries.

TO-DO:
- Remove any hardcoded passwords and discover a way to provide the docker-compose.yml with access to that password information. This means you should not need to manually enter your passwords for MySQL when starting your docker-compose file
- Database Integration: Use MySQL to store user credentials and implement secure password storage. (Have to make the sql table automatically without writing the query manually)
- Symfony [Bonus]: Additional marks for using the Symfony framework for application development. (I would probably end up skipping this)
- Admin Page: Create an administrator interface to view registered accounts and delete user accounts
  
- Make the UI better
