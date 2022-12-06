
SEBSOFT AUTH_COUPON

Auth_email extension that facilitates in entering a coupon code at signup.

Since the question has been asked many times over to be able to enter the coupon code at signup,
this plugin was developed.
It's an extension of the standard core AUTH_EMAIL plugin, works the same way and
even registers the user with auth = "email".
The only added value of this authentication plugin is the coupon extension and automated
processing of the entered coupon code.

Through the global settings the coupon code can be made a _requirement_ or the
coupon code can be optional (default behaviour so the auth_email proces itself
remains intact). This is because virtually every call is delegated back to the auth_email plugin.

INSTALLATION

- Copy the auth_coupon folder to your auth directory.
- Install & configure your authentication plugin.
- We're ready to run!
