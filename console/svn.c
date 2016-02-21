/**
 * #1 - remove deleted files
 */

 // #1 remove all manually deleted files
 svn st | grep '^!' | awk '{print $2}' | xargs svn delete --force