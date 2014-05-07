# Yes
result = (item.name for item in array)

# No
results = []
for item in array
    results.push item.name

# Filtering
result = (item for item in array when item.name is "test")

# Iterate over the keys and values of objects
object = one: 1, two: 2
alert("#{key} = #{value}") for key, value of object
