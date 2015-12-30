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
    #p json_data
    return json_data['data']
    client = Twitter::REST::Client.new do |config|
    #client = Twitter.configure do |config|
        config.consumer_key        = 'wyUYo7b7RTYHfXVuhYdp2g'
        config.consumer_secret     = 'B9VbOklYHPefjmIowTatD5OWuOpeaB9nJpQzmmT6Y'
        config.access_token        = '83277856-jup3PeQqOuZWhTEm5b3JZSYEqpgtFJgBWruSrTdPr'
        config.access_token_secret = '75pvjYAAfphuqkwQyzUWguPkVckkL3cniwSsw914'
    end
    #user = Twitter::REST::Users
    return client.user
    #p Twitter::Profile.new.profile_image_url_https
end
