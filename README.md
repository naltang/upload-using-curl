# upload-using-curl

This tool uploads a local file to a remote website using curl

## How to use
- Install `upload.php` to your remote website.
- Run the following command from your computer\
`curl -F f=@filename-to-send http://your-url-to-upload.php`

### Example
If you installed upload.php to your website of\
`http://10.0.0.1/path/upload.php` \
and the filename you want to send is \
`/tmp/tosend.txt` \
then use the following command to upload.\
`curl -F -f=@/tmp/tosend.txt http://10.0.0.1/path/upload.php`

## Prerequisties
- A php enabled apache http server
- curl

## For secure transactions please consider
- to change the name of upload.php and 'var_name' according to your preference
- to use https
