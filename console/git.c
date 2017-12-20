/**
 * #1 - remove deleted files
 * #2 - delete branch
 * #3 - chmod insensitive
 * #4 - edit commit message
 */

 // #1 remove all manually deleted files
 git ls-files --deleted -z | xargs -0 git rm
 
 // #2 delete branch and push changes
 git branch -d "branch_name"; git push origin; // old way
 git push origin --delete "branch_name" // new way
 
 // #3 don't register chmod changes to files
 git config core.fileMode false

 // #4 edit last commit message
 git commit --amend
