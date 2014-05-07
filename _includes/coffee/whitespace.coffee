$("body") # Yes
$( "body" ) # No

console.log x, y # Yes
console.log x , y # No

test: (param = null) -> # Yes
test: (param=null) -> # No

# Yes
x = 1
y = 1
fooBar = 3

# No
x      = 1
y      = 1
fooBar = 3
