// bad
[1, 2, 3].map(function (x) {
  return x * x;
});

// good
[1, 2, 3].map((x) => {
  return x * x;
});

// good
[1, 2, 3].map(x => x * x);

// good
[1, 2, 3].reduce((total, n) => {
  return total + n;
}, 0);
