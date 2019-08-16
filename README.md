1. Fork this repository to your own GitHub account.
1. Signup at heroku.com for a free account.
1. On Heroku create a new app and give it whatever name you like.
1. After creating the new app in Heroku go to the Deploy tab.
1. Under "Deployment method" choose "Connect to GitHub" and in the popup that opens allow Heroku access to your GitHub account.
1. After access is granted in the "Connect to GitHub" section type in the name of the GitHub repository you forked to your account, click Search and then click Connect for that project.
1. Select the GitHub branch you want to read from, typically "master".
1. Go to the Settings tab on Heroku.
1. Click Reveal Config Vars buttons.
1. Add the following configuration variables:
  1. URL: https://api.weatherlink.com
  1. DID: THE DID OF THE WEATHER STATION
  1. PASSWORD: THE WEATHERLINK ACCOUNT PASSWORD
  1. APITOKEN: THE V1 API TOKEN
1. Back on the Deploy tab you can click the Deploy Branch button at the bottom of the page to manually deploy the code from GitHub to Heroku.
1. It will take a few moments to deploy and relaunch the web server but you can then click the "Open app" button at the top of the screen to view the PHP page in a new browser window that will open.
1. From the new browser window that opened you can get the URL and use that in an iframe.
1. Lastly, feel free to change the HTML, CSS, etc in the GitHub repository you forked so you can customize the appearance of the page.
