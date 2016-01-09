## encoding: utf-8

require 'sinatra'
require 'sinatra/reloader'
require 'twitter'
require 'json'

get '/' do
    @path = 'index'
    @profile = get_profile_from_twitter
    #"this is #{path}"
    erb :template
#    erb :index
end

#get '/profile' do
#    @profile = get_profile_from_twitter
#    erb :header, :layout => :profile
#    #erb :header, :layout => false do
#    #    erb :profile
#    #end
#end

get '/:path' do |path|
    @path = path
    @profile = get_profile_from_twitter
    #p @profile['name']
    "this is #{path}"
    erb :template
end

def get_profile_from_twitter
    Encoding.default_external = "UTF-8"

    # 1時間に1回とかにして、キャッシュさせるようにした方がいいなこれ…
    json_file_path = './profile.json'

    json_data = open(json_file_path) do |io|
        JSON.load(io)
    end
        #return "aaaa"
    p json_data

    new_timestamp = Time.now.to_i
    if new_timestamp > json_data['timestamp'].to_i + 86400
      p "abababababa"

      client = Twitter::REST::Client.new do |config|
      #client = Twitter.configure do |config|
          config.consumer_key        = 'wyUYo7b7RTYHfXVuhYdp2g'
          config.consumer_secret     = 'B9VbOklYHPefjmIowTatD5OWuOpeaB9nJpQzmmT6Y'
          config.access_token        = '83277856-jup3PeQqOuZWhTEm5b3JZSYEqpgtFJgBWruSrTdPr'
          config.access_token_secret = '75pvjYAAfphuqkwQyzUWguPkVckkL3cniwSsw914'
      end
      #p client.user.profile_image_uri(:bigger)
      profile = client.user

      json_data['timestamp'] = new_timestamp
      json_data['data']['name'] = profile.name
      json_data['data']['screen_name'] = profile.screen_name
      json_data['data']['location'] = profile.location
      json_data['data']['description'] = profile.description

      open(json_file_path, 'w') do |io|
        JSON.dump(json_data, io)
      end
    end

    return json_data['data']
end
