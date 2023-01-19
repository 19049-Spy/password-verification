# Password verification script

####1x vykricnik z WAP a 1x SI
- The script expects the password to be sent as a POST parameter, and uses the password_hash() and password_verify() functions to securely hash and verify the password.
- The script then returns a JSON object with a "status" and "message" field indicating whether the password is valid or not.
- It is important to note that this is an example and you should use a more secure method of storing and comparing the passwords, like using a salted hash, and also use HTTPS to encrypt the communication.
- It creates a digital signature of the response using the OpenSSL library. It uses the private key to sign the json_encoded response and then adds the signature to the response array, encoded in base64.
- It is important to note that this is an example and you should use a more secure method of storing and comparing the passwords, like using a salted hash, and also use HTTPS to encrypt the communication.
- Also, the private key should be stored in a safe and secure location, and should only be accessible by the server.
On the client side, you will also need to have the public key and use it to verify the signature before proceeding with the response.
