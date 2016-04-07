/**
 * #1 - rename user
 * #2 - list all users
 * #3 - remove user password
 * #4 - remove user
 * #5 - remove user (with data)
 */

 // #1 rename user
usermod -l login-name old-name

// #2 list all users
cut -d: -f1 /etc/passwd

// #3 remove user password
passwd -d your_username

// #4 remove user
userdel -r myuser

// #5 remove user (with data)
userdel -r myuser