Array::slice # Yes
Array.prototype.slice # No

return @property # Yes
return this.property # No

return this # Yes
return @ # No

console.log args... # Yes

(a, b, c, rest...) -> # Yes
