# Latest Earthquakes with PHP

This PHP code provides a solution for displaying information about the latest earthquakes from the USGS (United States Geological Survey) earthquake data API. The code starts by setting the API URL that will be used to retrieve the data. The file_get_contents() function is then used to fetch the data from the API and store it in a variable.

The JSON data retrieved from the API is then decoded into a PHP array using the json_decode() function. This allows the code to access the earthquake information as an array of data structures, which makes it easier to extract the relevant information.

The code then uses a foreach loop to iterate over the array of earthquakes and extract the relevant information such as the date and time, latitude and longitude, depth, magnitude, and place of each earthquake. The extracted information is then formatted and displayed on the screen using the echo statement.

In addition to its functionality, this code also serves as an example of how to retrieve and display data from an API using PHP. The code is well-documented and easy to understand, making it a useful resource for developers who are looking to build similar solutions or who are new to working with APIs.

Overall, this code provides a useful tool for accessing and displaying up-to-date information about earthquakes from the USGS earthquake data API in a formatted and readable manner.
