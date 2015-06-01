// bad
var count = 1;

if (true) {
  count += 1;
}

// good, use the let.
let count = 1;

if (true) {
  count += 1;
}
