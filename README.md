## Basic Yii 2 template
# Unix
If running `docker-compose up` shows an error or blank page when visiting [localhost:8000](localhost:8000), check if the vendor folder was created.
If this is not the case: 
1. Run `composer install`
2. If step 1 yields an error, run `composer install --ignore-platform-reqs`
3. Composer should finish succesfully, the vendor directory should appear
4. Visiting [localhost:8000](localhost:8000) should now show the expected site OR a permission denied error.
5. Incase of a permission denied error: make sure the owner of the local repository and all files in it is the group www-data. `sudo chown -R www-data barebone-yii`. 

*** WARNING *** When executing these permission changes, you MUST either exclude the data folder or delete it and have MYSQL remake it on the next `docker-compose up` due to permission changes which prevent executing migrations (error 13)

##  hints
- Dont forget to create your own db.php from the db.php.template!
- To run migrations: `docker exec -it barebone-yii_php_1 bash`, then `php yii migrate/up`. To exit the container: `exit`