<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see \Composer\InstalledVersions::getRootPackage()} instead. The
     *             equivalent expression for this constant's contents is
     *             `\Composer\InstalledVersions::getRootPackage()['name']`.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'api-platform/core' => 'v2.5.6@d84282fd29cc16a4fac9be67fdd76ca247b94123',
  'composer/package-versions-deprecated' => '1.10.99@dd51b4443d58b34b6d9344cf4c288e621c9a826f',
  'doctrine/annotations' => '1.11.1@ce77a7ba1770462cd705a91a151b6c3746f9c6ad',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.6@5f0470363ff042d0057006ae7acabc5d7b5252d5',
  'doctrine/common' => '2.13.3@f3812c026e557892c34ef37f6ab808a6b567da7f',
  'doctrine/dbal' => '2.10.2@aab745e7b6b2de3b47019da81e7225e14dcfdac8',
  'doctrine/doctrine-bundle' => '2.1.0@0fb513842c78b43770597ef3c487cdf79d944db3',
  'doctrine/doctrine-migrations-bundle' => '3.0.1@96e730b0ffa0bb39c0f913c1966213f1674bf249',
  'doctrine/event-manager' => '1.1.0@629572819973f13486371cb611386eb17851e85c',
  'doctrine/inflector' => '1.4.3@4650c8b30c753a76bf44fb2ed00117d6f367490c',
  'doctrine/instantiator' => '1.3.1@f350df0268e904597e3bd9c4685c53e0e333feea',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.0.1@69eaf2ca5bc48357b43ddbdc31ccdffc0e2a0882',
  'doctrine/orm' => 'v2.7.3@d95e03ba660d50d785a9925f41927fef0ee553cf',
  'doctrine/persistence' => '1.3.7@0af483f91bada1c9ded6c2cfd26ab7d5ab2094e0',
  'doctrine/reflection' => '1.2.1@55e71912dfcd824b2fdd16f2d9afe15684cfce79',
  'doctrine/sql-formatter' => '1.1.0@5458bdcf176f6a53292e3f0cc73f292d6302fb0f',
  'egulias/email-validator' => '2.1.19@840d5603eb84cc81a6a0382adac3293e57c1c64c',
  'fig/link-util' => '1.1.1@c038ee75ca13663ddc2d1f185fe6f7533c00832a',
  'laminas/laminas-code' => '3.4.1@1cb8f203389ab1482bf89c0e70a04849bacd7766',
  'laminas/laminas-eventmanager' => '3.2.1@ce4dc0bdf3b14b7f9815775af9dfee80a63b4748',
  'laminas/laminas-zendframework-bridge' => '1.0.4@fcd87520e4943d968557803919523772475e8ea3',
  'lcobucci/jwt' => '3.3.2@56f10808089e38623345e28af2f2d5e4eb579455',
  'lexik/jwt-authentication-bundle' => 'v2.8.0@0b136a3b8b2125a85dc0ae64527e8c86cbe574f1',
  'maennchen/zipstream-php' => '2.1.0@c4c5803cc1f93df3d2448478ef79394a5981cc58',
  'markbaker/complex' => '1.4.8@8eaa40cceec7bf0518187530b2e63871be661b72',
  'markbaker/matrix' => '1.2.0@5348c5a67e3b75cd209d70103f916a93b1f1ed21',
  'monolog/monolog' => '2.1.1@f9eee5cec93dfb313a38b6b288741e84e53f02d5',
  'myclabs/php-enum' => '1.7.6@5f36467c7a87e20fbdc51e524fd8f9d1de80187c',
  'namshi/jose' => '7.2.3@89a24d7eb3040e285dd5925fcad992378b82bcff',
  'nelmio/cors-bundle' => '2.0.1@9683e6d30d000ef998919261329d825de7c53499',
  'ocramius/proxy-manager' => '2.8.0@ac1dd414fd114cfc0da9930e0ab46063c2f5e62a',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.0@3170448f5769fe19f456173d833734e0ff1b84df',
  'phpdocumentor/type-resolver' => '1.3.0@e878a14a65245fbe78f8080eba03b47c3b705651',
  'phpoffice/phpspreadsheet' => '1.14.1@2383aad5689778470491581442aab38cec41bf1d',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'swiftmailer/swiftmailer' => 'v6.2.3@149cfdf118b169f7840bbe3ef0d4bc795d1780c9',
  'symfony/asset' => 'v5.1.2@2f07b5993f1607c1c489bac3e15a000c33668b4b',
  'symfony/cache' => 'v5.1.2@787eb05e137ad74fa5e51857b9884719760c7b2f',
  'symfony/cache-contracts' => 'v2.1.3@9771a09d2e6b84ecb8c9f0a7dbc72ee92aeba009',
  'symfony/config' => 'v5.1.2@b8623ef3d99fe62a34baf7a111b576216965f880',
  'symfony/console' => 'v5.1.2@34ac555a3627e324b660e318daa07572e1140123',
  'symfony/dependency-injection' => 'v5.1.2@6508423eded583fc07e88a0172803e1a62f0310c',
  'symfony/deprecation-contracts' => 'v2.1.3@5e20b83385a77593259c9f8beb2c43cd03b2ac14',
  'symfony/doctrine-bridge' => 'v5.1.2@997377af37ae96565bf2aea127fb2b6285cd0d51',
  'symfony/dotenv' => 'v5.1.2@42d2a18597f4c7cafc0e25b1ad6a1cbb4f2caf05',
  'symfony/error-handler' => 'v5.1.2@7d0b927b9d3dc41d7d46cda38cbfcd20cdcbb896',
  'symfony/event-dispatcher' => 'v5.1.2@cc0d059e2e997e79ca34125a52f3e33de4424ac7',
  'symfony/event-dispatcher-contracts' => 'v2.1.3@f6f613d74cfc5a623fc36294d3451eb7fa5a042b',
  'symfony/expression-language' => 'v5.1.2@6675d937852379a251017db6e5144dd57506fbbd',
  'symfony/filesystem' => 'v5.1.2@6e4320f06d5f2cce0d96530162491f4465179157',
  'symfony/finder' => 'v5.1.2@4298870062bfc667cb78d2b379be4bf5dec5f187',
  'symfony/flex' => 'v1.9.1@0e752e47d8382361ca2d7ef016f549828185ddb6',
  'symfony/framework-bundle' => 'v5.1.2@d9a85deaa9c7a10df087d86f6a689eb5d4db0abc',
  'symfony/http-foundation' => 'v5.1.2@f93055171b847915225bd5b0a5792888419d8d75',
  'symfony/http-kernel' => 'v5.1.2@a18c27ace1ef344ffcb129a5b089bad7643b387a',
  'symfony/inflector' => 'v5.1.2@fddb4262dd136b34db993a2a3488713df91e4856',
  'symfony/monolog-bridge' => 'v5.1.3@81e8c7692b78161a06f779c741ef21d80f217175',
  'symfony/monolog-bundle' => 'v3.5.0@dd80460fcfe1fa2050a7103ad818e9d0686ce6fd',
  'symfony/polyfill-intl-grapheme' => 'v1.18.0@b740103edbdcc39602239ee8860f0f45a8eb9aa5',
  'symfony/polyfill-intl-idn' => 'v1.18.1@5dcab1bc7146cf8c1beaa4502a3d9be344334251',
  'symfony/polyfill-intl-normalizer' => 'v1.18.0@37078a8dd4a2a1e9ab0231af7c6cb671b2ed5a7e',
  'symfony/polyfill-mbstring' => 'v1.18.0@a6977d63bf9a0ad4c65cd352709e230876f9904a',
  'symfony/polyfill-php73' => 'v1.18.0@fffa1a52a023e782cdcc221d781fe1ec8f87fcca',
  'symfony/polyfill-php80' => 'v1.18.0@d87d5766cbf48d72388a9f6b85f280c8ad51f981',
  'symfony/property-access' => 'v5.1.2@638b96246da68810484a5a46ff397e9326f42afc',
  'symfony/property-info' => 'v5.1.2@75d79faca45092829b55eb83f73068e34c6567c5',
  'symfony/routing' => 'v5.1.2@bbd0ba121d623f66d165a55a108008968911f3eb',
  'symfony/security-bundle' => 'v5.1.2@d2013a73a0163f4fad6d24fbb81affb6e943ec2e',
  'symfony/security-core' => 'v5.1.2@7414e45f720dd81879bd9a74f152ec92e91d36b6',
  'symfony/security-csrf' => 'v5.1.2@962323e4db4458d731d5006f14019a22a2f84b06',
  'symfony/security-guard' => 'v5.1.2@85c368be963e9f0df9e93d830f966fc0af531703',
  'symfony/security-http' => 'v5.1.2@671aeab2db9162288e27c8ef525c63d51c810cb3',
  'symfony/serializer' => 'v5.1.2@d1151fc0fd64b613f2a7012afc22d36b1341a5fd',
  'symfony/service-contracts' => 'v2.1.3@58c7475e5457c5492c26cc740cc0ad7464be9442',
  'symfony/stopwatch' => 'v5.1.2@0f7c58cf81dbb5dd67d423a89d577524a2ec0323',
  'symfony/string' => 'v5.1.2@ac70459db781108db7c6d8981dd31ce0e29e3298',
  'symfony/swiftmailer-bundle' => 'v3.4.0@553d2474288349faed873da8ab7c1551a00d26ae',
  'symfony/translation-contracts' => 'v2.1.3@616a9773c853097607cf9dd6577d5b143ffdcd63',
  'symfony/twig-bridge' => 'v5.1.2@04f57638e591b23d06f72dca2f123605dbbe3a75',
  'symfony/twig-bundle' => 'v5.1.2@8898ef8aea8fa48638e15ce00c7c6318ce570ce1',
  'symfony/validator' => 'v5.1.8@360acadab7edcdca9005c4ad3b535f9c20db62fb',
  'symfony/var-dumper' => 'v5.1.2@46a942903059b0b05e601f00eb64179e05578c0f',
  'symfony/var-exporter' => 'v5.1.2@eabaabfe1485ca955c5b53307eade15ccda57a15',
  'symfony/web-link' => 'v5.1.2@ba2554887e34e693e3888f23f83c72d5ce04bfb2',
  'symfony/yaml' => 'v5.1.2@ea342353a3ef4f453809acc4ebc55382231d4d23',
  'twig/twig' => 'v3.0.4@582bdbdc173027ebfba3c93dc750a40b8f9ebc02',
  'webimpress/safe-writer' => '2.0.1@d6e879960febb307c112538997316371f1e95b12',
  'webmozart/assert' => '1.9.1@bafc69caeb4d49c39fd0779086c03a3738cbb389',
  'willdurand/negotiation' => 'v2.3.1@03436ededa67c6e83b9b12defac15384cb399dc9',
  'doctrine/data-fixtures' => '1.4.3@7ebac50901eb4516816ac39100dba1759d843943',
  'doctrine/doctrine-fixtures-bundle' => '3.3.1@39defca57ee0949e1475c46177b30b6d1b732e8f',
  'fzaninotto/faker' => 'v1.9.1@fc10d778e4b84d5bd315dad194661e091d307c6f',
  'nikic/php-parser' => 'v4.6.0@c346bbfafe2ff60680258b631afb730d186ed864',
  'symfony/maker-bundle' => 'v1.20.0@b048c7b2be5bce9024ae3b0db97d44a107029c27',
  'paragonie/random_compat' => '2.*@440efcc23536752d61df4b6f756854db4893d335',
  'symfony/polyfill-ctype' => '*@440efcc23536752d61df4b6f756854db4893d335',
  'symfony/polyfill-iconv' => '*@440efcc23536752d61df4b6f756854db4893d335',
  'symfony/polyfill-php72' => '*@440efcc23536752d61df4b6f756854db4893d335',
  'symfony/polyfill-php71' => '*@440efcc23536752d61df4b6f756854db4893d335',
  'symfony/polyfill-php70' => '*@440efcc23536752d61df4b6f756854db4893d335',
  'symfony/polyfill-php56' => '*@440efcc23536752d61df4b6f756854db4893d335',
  '__root__' => 'dev-ldab@440efcc23536752d61df4b6f756854db4893d335',
);

    private function __construct()
    {
        class_exists(InstalledVersions::class);
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false)) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
