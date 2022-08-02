#check if the file setup exist
cat .setup 2> /dev/null

if [ $? -ne 0 ]; then
	#define the dir and exec mysqld_safe
	usr/bin/mysqld_safe --datadir=/var/lib/mysql &

	#wait the server myslq is up
	while ! mysqladmin ping -h "$MARIADB_HOST" --silent; do
    	sleep 1
	done

	#exec the script sql in mariadb
	eval "echo \"$(cat /tmp/create_db.sql)\"" | mariadb

	#create the file setup
	touch .setup
fi

#define the dir and exec mysqld_safe
usr/bin/mysqld_safe --datadir=/var/lib/mysql

# mysql -u root -p
# SHOW DATABASES;
# use 'wordpress';
# SHOW TABLES;
# SELECT wp_users.display_name FROM wp_users;
# SELECT *  FROM wp_users;