# Numentech Tech Test

This project is abaut making a todo list with a twist, we want only registered users to be able to 

## Prerequisites

If you will open this tech test via Linux or Mac distribution, you're good to go if you have Docker installed.
For windows users (like my case) You will need <a href="https://learn.microsoft.com/en-us/windows/wsl/install">WSL</a> and <a href="https://www.docker.com/products/docker-desktop/">Docker Desktop</a>


## Initialization of the project

This project has been wrapped in a container with Laravel Sail, so in the project root you can execute the command:

`./vendor/bin/sail up`

With this you will have the ecosistem mounted, then to run the frontend part you will need to enter the laravel docker, in the Terminal tab, run:

`npm run dev`

this ensures Vite to compile the files an serve them in your localhost

'http://localhost/'


## The idea
I wanted to create an easy to access ecosistem with docker so the prerequisites were as minimum as possible, so I used Sail which does just that for us.
For the frontend, I wanted to use Vue 3 since I've been only using Vue 2 professionally, this led me into searching on Laravel documentation how to do thad, therefore finding Laravel breeze and Inertia.js

## The problems encountered
The major problem is I've ran out of time, I deposited arround 40 - 50% of the time on the infraestructure of the project, giving me little time to the actual App making
The second one is unfamiliarity with Laravel 10 and Vue 3, the newer versions have different kinds of ways of making things, the most notable and time consuming for me were pairing the frontend with the backend using the starter kit and Inertia.js amd the second one that Vue 3 has changed into <a href="https://vuejs.org/guide/introduction.html#api-styles">composition API</a>, I took the risk of using it that way resulting in unfamiliar syntax or ways of instantiating variables in the data() or other time consuming changes.

## What is done
At the moment there is only 2/3 parts of the application, considering Login and Registering parts are made, and Model, migration and Controller are present for the Todos, only missing to make it work correctly with Inertia, then make the actual frontend UI and UX.

## The plan
I have the plan on continuing the test until I get it as I like it, therefore I will be creating a branch called *future* where I will continue development and finish it.

Todos:
Finishing The Todos functionality.
UI planning: Todos in the top-center as a responsive card gallery of the app and, if logged in, appears in the center bottom a fixed button for creating more todos, which opens a modal for creating them, also when editting them we will use the same modal component and slots for each form.

Security updates: 
On the backend, trying to only send the name of the logged person, avoiding usign the laravel Authto retrieve the name since we could expose the Id from the DB


## The learning
Even having risked to jump up versions of Frameworks to newer ones that I've used before, I'm super grateful to have been doing it because I feel like I learned a lot and there is room for improvement. On a working environment instead of bashing my head against the documentation I would have raised my hand if after 30 minutes of investigation was unsuccessful. About 
