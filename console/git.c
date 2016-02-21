/**
 * #1 - remove deleted files
 */

 // #1 remove all manually deleted files
 git ls-files --deleted -z | xargs -0 git rm