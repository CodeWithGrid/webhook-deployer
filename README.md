Easy script to auto-pull latest code from github repo. This is tested and functional on MediaTemple's (gs) hosting platform. 

Installation
------------

1. SSH to your server
2. Remove default /html/ directory `` rm -rf html ``
3. Clone your repo from github `` git clone git@github.com:[username]/[reponame].git `` - if you are asked for an SSH password, you need to [edit your key to not require one](http://www.cyberciti.biz/faq/howto-ssh-changing-passphrase/). 
4. Make the new directory your web root `` cd .., mv [reponame] html ``
5. Upload `` /webhook-deploy/ `` to your root
6. Add `` webhook-deploy `` to .gitignore
7. In github, go to Repository Settings -> Service Hooks -> WebHook URLs and add `` http://domain.com/webhook-deploy/auto.php ``
