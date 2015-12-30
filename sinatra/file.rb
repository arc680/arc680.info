## encoding: utf-8

require 'json'

json_file_path = './profile.json'

json_data = open(json_file_path) do |io|
    JSON.load(io)
end

p json_data['data']