/**
* inserts this Profile into mysql
*
*
 **/
INSERT INTO profile(profileId, profileEmail, profileFavorites, profileHash, profileLocation, profileUsername)
VALUES(UNHEX(REPLACE("aebdaeff-75ae-4039-b520-b506578efa3f", "dmscus@gmail.com", "Raspberry Kush", "564283", "Albuquerque, NM", "dmscus");

INSERT INTO profile(profileId, profileEmail, profileFavorites, profileHash, profileLocation, profileUsername)
VALUES(UNHEX(REPLACE("9fa0132a-f8a1-4377-9341-63e8ec033795", "sucsmd@gmail.com", "Trainwreck", "453256", "Tucson, AZ", "sucsmd");

DELETE FROM profile WHERE profileFavorites = 'Ice Cream Cake'
DELETE FROM profile WHERE profileFavorites = 'Strawberry Blonde'

UPDATE profile
SET profileFavorites = 'Reba'
WHERE profileEmail = 'dmscus@gmail.com'

UPDATE profile
SET profileLocation = 'Roswell, NM'
Where profileUsername = 'sucsmd'
