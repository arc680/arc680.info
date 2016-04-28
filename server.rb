## encoding: utf-8

require 'sinatra'
require 'sinatra/reloader'
require 'twitter'
require 'json'

get '/' do
  @path = 'index'
  json_data = get_json('https://twibio.herokuapp.com/')
  @profile = json_data['data']

  puts env['REMOTE_HOST']
  if env['REMOTE_HOST'] == 'dev.arc680.info'
    puts 'dev mode'
  else
    erb :template
  end
end

get '/:path' do |path|
  @path = path
  json_data = get_json('https://twibio.herokuapp.com/')
  @profile = json_data['data']
  p env
  if path == 'test'
    erb :test
  else
    erb :template
  end
end

# from http://qiita.com/awakia/items/bd8c1385115df27c15fa
require 'net/http'
require 'uri'
require 'json'

def get_json(location, limit = 10)
  raise ArgumentError, 'too many HTTP redirects' if limit == 0
  uri = URI.parse(location)
  begin
    response = Net::HTTP.start(uri.host, uri.port, use_ssl: uri.scheme == 'https') do |http|
      http.open_timeout = 5
      http.read_timeout = 10
      http.get(uri.request_uri)
    end
    case response
    when Net::HTTPSuccess
      json = response.body
      JSON.parse(json)
    when Net::HTTPRedirection
      location = response['location']
      warn "redirected to #{location}"
      get_json(location, limit - 1)
    else
      puts [uri.to_s, response.value].join(" : ")
      # handle error
    end
  rescue => e
    puts [uri.to_s, e.class, e].join(" : ")
    # handle error
  end
end
