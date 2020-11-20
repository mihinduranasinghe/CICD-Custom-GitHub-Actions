FROM php:7.4.2
# This php image dones not have COMPOSER tool installed

#You can run it from dockerhub
# RUN dockerhubimage

COPY --from=composer /usr/bin/composer /usr/bin/composer
# By this line you can run composer in your container
# https://hub.docker.com/_/composer

WORKDIR /usr/src/app
COPY . .
# COPY fromcurrentdirectory to workingdirectory (same)
#Now you can run composer commands

#Other normal actions can be performed
RUN apt-get update
RUN apt-get -y install zip
# RUN ls /usr/src/app/

#Now you can run composer commands
#like npm install, -> composer install because we successfully setup composer tool inside our container
RUN composer install 



# ENTRYPOINT [ "PHP","/usr/src/app/script.php" ] 
ENTRYPOINT [ "PHP","/$GITHUB_WORKSPACE/.github/actions/slack-docker/script.php" ]