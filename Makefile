1:
	ls|grep -v ^index\.|grep -v \.html\$|sed 's/^/LayoutIgnoreURI /' >.htaccess
