ALTER DATABASE cmarquez69 CHARACTER SET utf8 COLLATE utf8_unicode_ci;
DROP TABLE IF EXISTS pick;
DROP TABLE IF EXISTS product;
DROP TABLE IF EXISTS profile;
CREATE TABLE profile(
	profileId BINARY(16) NOT NULL,
	profileEmail VARCHAR(128) NOT NULL,
	profileFavorites VARCHAR(128),
	profileHash VARCHAR(128) NOT NULL,
	profileLocation VARCHAR(128),
	profileUsername VARCHAR(32) NOT NULL,
	UNIQUE(profileEmail),
	UNIQUE(profileUsername),
	PRIMARY KEY(profileId)
);
CREATE TABLE product(
	productId BINARY(16) NOT NULL,
	productFacts VARCHAR(128)  NOT NULL,
	productHash VARCHAR(128) NOT NULL,
	productHistory VARCHAR(128) NOT NULL,
	productName VARCHAR(128) NOT NULL,
	productPrice VARCHAR(128) NOT NULL,
	productVariations VARCHAR(128) NOT NULL,
	productVariety VARCHAR(128) NOT NULL,
	PRIMARY KEY(productID)
);
CREATE TABLE pick(
	pickProductId BINARY(16),
	pickProfileId BINARY(16),
	INDEX(pickProductId),
	INDEX(pickProfileId),
	FOREIGN KEY(pickProfileId) REFERENCES profile(profileId),
	FOREIGN KEY(pickProductId) References product(productId),
	PRIMARY KEY(pickProfileId, pickProductId)
);