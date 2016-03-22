# MessHub
Code for a Raspberry Pi / server combo that manages and dispenses limited ammounts of items to users at hubs connected to the internet.
We've built a device that dispenses meals to refugees, much like an actuall mess. The device is portable and fully battery powered, connecting to the internet via 3G. As a result, it can be placed near refugee camps, in order for refugees not to have to walk great distances in possibly adverse conditions in order to get food. Since the device already uses a Raspberry Pi Zero to control the motor that dispenses the meals, we've added the ability for the Pi to be used as a regular computer by refugees as soon as the meals in stock have emptied in the device. Additionally, WiFi connectivity can be provided via an extra WiFi dongle.

We can find the shortest path to restock the devices, as well as track the movements of certain users of the device using an Azure webserver that produces a static map of the above information via PHP.
