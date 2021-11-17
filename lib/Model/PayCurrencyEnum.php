<?php
/**
 * PayCurrencyEnum
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Merge HRIS API
 *
 * The unified API for building rich integrations with multiple HR Information System platforms.
 *
 * The version of the OpenAPI document: 1.0
 * Contact: hello@merge.dev
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * PayCurrencyEnum Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PayCurrencyEnum
{
    /**
     * Possible values of this enum
     */
    const XUA = 'XUA';
    const AFN = 'AFN';
    const AFA = 'AFA';
    const ALL = 'ALL';
    const ALK = 'ALK';
    const DZD = 'DZD';
    const ADP = 'ADP';
    const AOA = 'AOA';
    const AOK = 'AOK';
    const AON = 'AON';
    const AOR = 'AOR';
    const ARA = 'ARA';
    const ARS = 'ARS';
    const ARM = 'ARM';
    const ARP = 'ARP';
    const ARL = 'ARL';
    const AMD = 'AMD';
    const AWG = 'AWG';
    const AUD = 'AUD';
    const ATS = 'ATS';
    const AZN = 'AZN';
    const AZM = 'AZM';
    const BSD = 'BSD';
    const BHD = 'BHD';
    const BDT = 'BDT';
    const BBD = 'BBD';
    const BYN = 'BYN';
    const BYB = 'BYB';
    const BYR = 'BYR';
    const BEF = 'BEF';
    const BEC = 'BEC';
    const BEL = 'BEL';
    const BZD = 'BZD';
    const BMD = 'BMD';
    const BTN = 'BTN';
    const BOB = 'BOB';
    const BOL = 'BOL';
    const BOV = 'BOV';
    const BOP = 'BOP';
    const BAM = 'BAM';
    const BAD = 'BAD';
    const BAN = 'BAN';
    const BWP = 'BWP';
    const BRC = 'BRC';
    const BRZ = 'BRZ';
    const BRE = 'BRE';
    const BRR = 'BRR';
    const BRN = 'BRN';
    const BRB = 'BRB';
    const BRL = 'BRL';
    const GBP = 'GBP';
    const BND = 'BND';
    const BGL = 'BGL';
    const BGN = 'BGN';
    const BGO = 'BGO';
    const BGM = 'BGM';
    const BUK = 'BUK';
    const BIF = 'BIF';
    const XPF = 'XPF';
    const KHR = 'KHR';
    const CAD = 'CAD';
    const CVE = 'CVE';
    const KYD = 'KYD';
    const XAF = 'XAF';
    const CLE = 'CLE';
    const CLP = 'CLP';
    const CLF = 'CLF';
    const CNX = 'CNX';
    const CNY = 'CNY';
    const CNH = 'CNH';
    const COP = 'COP';
    const COU = 'COU';
    const KMF = 'KMF';
    const CDF = 'CDF';
    const CRC = 'CRC';
    const HRD = 'HRD';
    const HRK = 'HRK';
    const CUC = 'CUC';
    const CUP = 'CUP';
    const CYP = 'CYP';
    const CZK = 'CZK';
    const CSK = 'CSK';
    const DKK = 'DKK';
    const DJF = 'DJF';
    const DOP = 'DOP';
    const NLG = 'NLG';
    const XCD = 'XCD';
    const DDM = 'DDM';
    const ECS = 'ECS';
    const ECV = 'ECV';
    const EGP = 'EGP';
    const GQE = 'GQE';
    const ERN = 'ERN';
    const EEK = 'EEK';
    const ETB = 'ETB';
    const EUR = 'EUR';
    const XBA = 'XBA';
    const XEU = 'XEU';
    const XBB = 'XBB';
    const XBC = 'XBC';
    const XBD = 'XBD';
    const FKP = 'FKP';
    const FJD = 'FJD';
    const FIM = 'FIM';
    const FRF = 'FRF';
    const XFO = 'XFO';
    const XFU = 'XFU';
    const GMD = 'GMD';
    const GEK = 'GEK';
    const GEL = 'GEL';
    const DEM = 'DEM';
    const GHS = 'GHS';
    const GHC = 'GHC';
    const GIP = 'GIP';
    const XAU = 'XAU';
    const GRD = 'GRD';
    const GTQ = 'GTQ';
    const GWP = 'GWP';
    const GNF = 'GNF';
    const GNS = 'GNS';
    const GYD = 'GYD';
    const HTG = 'HTG';
    const HNL = 'HNL';
    const HKD = 'HKD';
    const HUF = 'HUF';
    const IMP = 'IMP';
    const ISK = 'ISK';
    const ISJ = 'ISJ';
    const INR = 'INR';
    const IDR = 'IDR';
    const IRR = 'IRR';
    const IQD = 'IQD';
    const IEP = 'IEP';
    const ILS = 'ILS';
    const ILP = 'ILP';
    const ILR = 'ILR';
    const ITL = 'ITL';
    const JMD = 'JMD';
    const JPY = 'JPY';
    const JOD = 'JOD';
    const KZT = 'KZT';
    const KES = 'KES';
    const KWD = 'KWD';
    const KGS = 'KGS';
    const LAK = 'LAK';
    const LVL = 'LVL';
    const LVR = 'LVR';
    const LBP = 'LBP';
    const LSL = 'LSL';
    const LRD = 'LRD';
    const LYD = 'LYD';
    const LTL = 'LTL';
    const LTT = 'LTT';
    const LUL = 'LUL';
    const LUC = 'LUC';
    const LUF = 'LUF';
    const MOP = 'MOP';
    const MKD = 'MKD';
    const MKN = 'MKN';
    const MGA = 'MGA';
    const MGF = 'MGF';
    const MWK = 'MWK';
    const MYR = 'MYR';
    const MVR = 'MVR';
    const MVP = 'MVP';
    const MLF = 'MLF';
    const MTL = 'MTL';
    const MTP = 'MTP';
    const MRU = 'MRU';
    const MRO = 'MRO';
    const MUR = 'MUR';
    const MXV = 'MXV';
    const MXN = 'MXN';
    const MXP = 'MXP';
    const MDC = 'MDC';
    const MDL = 'MDL';
    const MCF = 'MCF';
    const MNT = 'MNT';
    const MAD = 'MAD';
    const MAF = 'MAF';
    const MZE = 'MZE';
    const MZN = 'MZN';
    const MZM = 'MZM';
    const MMK = 'MMK';
    const NAD = 'NAD';
    const NPR = 'NPR';
    const ANG = 'ANG';
    const TWD = 'TWD';
    const NZD = 'NZD';
    const NIO = 'NIO';
    const NIC = 'NIC';
    const NGN = 'NGN';
    const KPW = 'KPW';
    const NOK = 'NOK';
    const OMR = 'OMR';
    const PKR = 'PKR';
    const XPD = 'XPD';
    const PAB = 'PAB';
    const PGK = 'PGK';
    const PYG = 'PYG';
    const PEI = 'PEI';
    const PEN = 'PEN';
    const PES = 'PES';
    const PHP = 'PHP';
    const XPT = 'XPT';
    const PLN = 'PLN';
    const PLZ = 'PLZ';
    const PTE = 'PTE';
    const GWE = 'GWE';
    const QAR = 'QAR';
    const XRE = 'XRE';
    const RHD = 'RHD';
    const RON = 'RON';
    const ROL = 'ROL';
    const RUB = 'RUB';
    const RUR = 'RUR';
    const RWF = 'RWF';
    const SVC = 'SVC';
    const WST = 'WST';
    const SAR = 'SAR';
    const RSD = 'RSD';
    const CSD = 'CSD';
    const SCR = 'SCR';
    const SLL = 'SLL';
    const XAG = 'XAG';
    const SGD = 'SGD';
    const SKK = 'SKK';
    const SIT = 'SIT';
    const SBD = 'SBD';
    const SOS = 'SOS';
    const ZAR = 'ZAR';
    const ZAL = 'ZAL';
    const KRH = 'KRH';
    const KRW = 'KRW';
    const KRO = 'KRO';
    const SSP = 'SSP';
    const SUR = 'SUR';
    const ESP = 'ESP';
    const ESA = 'ESA';
    const ESB = 'ESB';
    const XDR = 'XDR';
    const LKR = 'LKR';
    const SHP = 'SHP';
    const XSU = 'XSU';
    const SDD = 'SDD';
    const SDG = 'SDG';
    const SDP = 'SDP';
    const SRD = 'SRD';
    const SRG = 'SRG';
    const SZL = 'SZL';
    const SEK = 'SEK';
    const CHF = 'CHF';
    const SYP = 'SYP';
    const STN = 'STN';
    const STD = 'STD';
    const TVD = 'TVD';
    const TJR = 'TJR';
    const TJS = 'TJS';
    const TZS = 'TZS';
    const XTS = 'XTS';
    const THB = 'THB';
    const XXX = 'XXX';
    const TPE = 'TPE';
    const TOP = 'TOP';
    const TTD = 'TTD';
    const TND = 'TND';
    const _TRY = 'TRY';
    const TRL = 'TRL';
    const TMT = 'TMT';
    const TMM = 'TMM';
    const USD = 'USD';
    const USN = 'USN';
    const USS = 'USS';
    const UGX = 'UGX';
    const UGS = 'UGS';
    const UAH = 'UAH';
    const UAK = 'UAK';
    const AED = 'AED';
    const UYW = 'UYW';
    const UYU = 'UYU';
    const UYP = 'UYP';
    const UYI = 'UYI';
    const UZS = 'UZS';
    const VUV = 'VUV';
    const VES = 'VES';
    const VEB = 'VEB';
    const VEF = 'VEF';
    const VND = 'VND';
    const VNN = 'VNN';
    const CHE = 'CHE';
    const CHW = 'CHW';
    const XOF = 'XOF';
    const YDD = 'YDD';
    const YER = 'YER';
    const YUN = 'YUN';
    const YUD = 'YUD';
    const YUM = 'YUM';
    const YUR = 'YUR';
    const ZWN = 'ZWN';
    const ZRN = 'ZRN';
    const ZRZ = 'ZRZ';
    const ZMW = 'ZMW';
    const ZMK = 'ZMK';
    const ZWD = 'ZWD';
    const ZWR = 'ZWR';
    const ZWL = 'ZWL';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::XUA,
            self::AFN,
            self::AFA,
            self::ALL,
            self::ALK,
            self::DZD,
            self::ADP,
            self::AOA,
            self::AOK,
            self::AON,
            self::AOR,
            self::ARA,
            self::ARS,
            self::ARM,
            self::ARP,
            self::ARL,
            self::AMD,
            self::AWG,
            self::AUD,
            self::ATS,
            self::AZN,
            self::AZM,
            self::BSD,
            self::BHD,
            self::BDT,
            self::BBD,
            self::BYN,
            self::BYB,
            self::BYR,
            self::BEF,
            self::BEC,
            self::BEL,
            self::BZD,
            self::BMD,
            self::BTN,
            self::BOB,
            self::BOL,
            self::BOV,
            self::BOP,
            self::BAM,
            self::BAD,
            self::BAN,
            self::BWP,
            self::BRC,
            self::BRZ,
            self::BRE,
            self::BRR,
            self::BRN,
            self::BRB,
            self::BRL,
            self::GBP,
            self::BND,
            self::BGL,
            self::BGN,
            self::BGO,
            self::BGM,
            self::BUK,
            self::BIF,
            self::XPF,
            self::KHR,
            self::CAD,
            self::CVE,
            self::KYD,
            self::XAF,
            self::CLE,
            self::CLP,
            self::CLF,
            self::CNX,
            self::CNY,
            self::CNH,
            self::COP,
            self::COU,
            self::KMF,
            self::CDF,
            self::CRC,
            self::HRD,
            self::HRK,
            self::CUC,
            self::CUP,
            self::CYP,
            self::CZK,
            self::CSK,
            self::DKK,
            self::DJF,
            self::DOP,
            self::NLG,
            self::XCD,
            self::DDM,
            self::ECS,
            self::ECV,
            self::EGP,
            self::GQE,
            self::ERN,
            self::EEK,
            self::ETB,
            self::EUR,
            self::XBA,
            self::XEU,
            self::XBB,
            self::XBC,
            self::XBD,
            self::FKP,
            self::FJD,
            self::FIM,
            self::FRF,
            self::XFO,
            self::XFU,
            self::GMD,
            self::GEK,
            self::GEL,
            self::DEM,
            self::GHS,
            self::GHC,
            self::GIP,
            self::XAU,
            self::GRD,
            self::GTQ,
            self::GWP,
            self::GNF,
            self::GNS,
            self::GYD,
            self::HTG,
            self::HNL,
            self::HKD,
            self::HUF,
            self::IMP,
            self::ISK,
            self::ISJ,
            self::INR,
            self::IDR,
            self::IRR,
            self::IQD,
            self::IEP,
            self::ILS,
            self::ILP,
            self::ILR,
            self::ITL,
            self::JMD,
            self::JPY,
            self::JOD,
            self::KZT,
            self::KES,
            self::KWD,
            self::KGS,
            self::LAK,
            self::LVL,
            self::LVR,
            self::LBP,
            self::LSL,
            self::LRD,
            self::LYD,
            self::LTL,
            self::LTT,
            self::LUL,
            self::LUC,
            self::LUF,
            self::MOP,
            self::MKD,
            self::MKN,
            self::MGA,
            self::MGF,
            self::MWK,
            self::MYR,
            self::MVR,
            self::MVP,
            self::MLF,
            self::MTL,
            self::MTP,
            self::MRU,
            self::MRO,
            self::MUR,
            self::MXV,
            self::MXN,
            self::MXP,
            self::MDC,
            self::MDL,
            self::MCF,
            self::MNT,
            self::MAD,
            self::MAF,
            self::MZE,
            self::MZN,
            self::MZM,
            self::MMK,
            self::NAD,
            self::NPR,
            self::ANG,
            self::TWD,
            self::NZD,
            self::NIO,
            self::NIC,
            self::NGN,
            self::KPW,
            self::NOK,
            self::OMR,
            self::PKR,
            self::XPD,
            self::PAB,
            self::PGK,
            self::PYG,
            self::PEI,
            self::PEN,
            self::PES,
            self::PHP,
            self::XPT,
            self::PLN,
            self::PLZ,
            self::PTE,
            self::GWE,
            self::QAR,
            self::XRE,
            self::RHD,
            self::RON,
            self::ROL,
            self::RUB,
            self::RUR,
            self::RWF,
            self::SVC,
            self::WST,
            self::SAR,
            self::RSD,
            self::CSD,
            self::SCR,
            self::SLL,
            self::XAG,
            self::SGD,
            self::SKK,
            self::SIT,
            self::SBD,
            self::SOS,
            self::ZAR,
            self::ZAL,
            self::KRH,
            self::KRW,
            self::KRO,
            self::SSP,
            self::SUR,
            self::ESP,
            self::ESA,
            self::ESB,
            self::XDR,
            self::LKR,
            self::SHP,
            self::XSU,
            self::SDD,
            self::SDG,
            self::SDP,
            self::SRD,
            self::SRG,
            self::SZL,
            self::SEK,
            self::CHF,
            self::SYP,
            self::STN,
            self::STD,
            self::TVD,
            self::TJR,
            self::TJS,
            self::TZS,
            self::XTS,
            self::THB,
            self::XXX,
            self::TPE,
            self::TOP,
            self::TTD,
            self::TND,
            self::_TRY,
            self::TRL,
            self::TMT,
            self::TMM,
            self::USD,
            self::USN,
            self::USS,
            self::UGX,
            self::UGS,
            self::UAH,
            self::UAK,
            self::AED,
            self::UYW,
            self::UYU,
            self::UYP,
            self::UYI,
            self::UZS,
            self::VUV,
            self::VES,
            self::VEB,
            self::VEF,
            self::VND,
            self::VNN,
            self::CHE,
            self::CHW,
            self::XOF,
            self::YDD,
            self::YER,
            self::YUN,
            self::YUD,
            self::YUM,
            self::YUR,
            self::ZWN,
            self::ZRN,
            self::ZRZ,
            self::ZMW,
            self::ZMK,
            self::ZWD,
            self::ZWR,
            self::ZWL,
        ];
    }
}


