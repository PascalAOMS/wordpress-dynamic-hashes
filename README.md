# Using Dynamic Hashes in File Names with WordPress’ Enqueue Function

**More details are to be found in my [CSS-Tricks article](https://css-tricks.com/hashes-in-wordpress-assets-with-enqueue/).**

Using **Webpack** and its dynamic hash generator WordPress does not allow to enqueue these files automatically out of the box.

Looping over the script and style files allows to enqueue them with their hash values.
