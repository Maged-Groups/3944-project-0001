# GIT Commands

## Configure user name and email

```bash
# Per Project, inside the project folder open the CMD or git bash
git config user.name "Your Name"
git config user.email "youremail"

# Global on the windows
git config --global user.name "Your Name"
git config --global user.email "youremail"
```

## Initialize a new reposotory

```bash
git init
```

## Add file to stage

```bash
git add .
```

## Commit changes

```bash
git commit -m "Your Message"
# OR
git commit -m "Your Message Header

Message Body

Message Footer"
```

## link local repo to GitHub repo

```bash
git remote add origin REPO_URL
```

## Upload your commits "Changes"

```bash
# First time
git push -u origin main

# Everytime
git push
```

## Change the remote origin

```bash
git remote set-url origin REPO_URL
```

## Clone reposotory into my local machine

```bash
# GIT will create a folder with the same name of the repo
git clone REPO_URL

# I need to create a folder with a choosen name
git clone REPO_URL FOLDER_NAME

# I need to download the repo inside the current folder
git clone REPO_URL .
```
