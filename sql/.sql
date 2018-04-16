ALTER DATABASE your_database_name_CHANGE_ME CHARACTER SET utf8 COLLATE utf8_unicode_ci;
DROP TABLE IF EXISTS 'select';
DROP TABLE IF EXISTS product;
DROP TABLE IF EXISTS profile;
CREATE TABLE profile(
			profileId BINARY(16) NOT NULL,
			profileLocation VARCHAR(128)
			profileEmail VARCHAR(128)
			profileFavorites VARCHAR(128)
			profileUsername VARCHAR(16)
);
CREATE TABLE product(
			productId BINARY(16) NOT NULL,
			productName VARCHAR(128) NOT NULL,
			productVariety VARCHAR(128) NOT NULL,
			productFacts VARCHAR(128)  NOT NULL,
			productHistory VARCHAR(128) NOT NULL,
			productPrice VARCHAR(128) NOT NULL,
			productVariations VARCHAR(128) NOT NULL,
);
CREATE TABLE 'pick'(
			pickProfileId BINARY(16)
			pickProductId BINARY(16)
			INDEX(pickProfileId),
			INDEX(pickProductId),
			FOREIGN KEY(pickProfileId) REFERENCES profile(profileId),
			FOREIGN KEY(pickProductId) References product(productId),
);