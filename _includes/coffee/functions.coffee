foo = (arg1, arg2) -> # Yes
foo = (arg1, arg2)-> # No

# chained functions
[1..3]
    .map((x) -> x * x)
    .concat([10..12])
    .filter((x) -> x < 11)
    .reduce((x, y) -> x + y)

foo(4).bar(8) # Yes
foo(4).bar 8 # No
